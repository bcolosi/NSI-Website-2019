<?php
    // Turn off error reporting
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();

    // Test to enable CMS
    function check_key($recivedKey){
        if(isset($recivedKey)){
            // Connect to DB
            $databaseConnection = new mysqli('nsiats.mysql.database.azure.com', 'adminsa@nsiats', 'e0375906', 'nsiats');
            if($databaseConnection->connect_error){
                echo "PHP Version: ".phpversion()."<br>";
                die("Database selection failed: ". $databaseConnection->connect_error);
            }

            // Get keys from DB
            $get_keys_Q = "SELECT web_key, encryption_method, encryption_key FROM nsiats.website_keys";
            $get_keys_R = $databaseConnection->query($get_keys_Q);

            // Check if Key is valid
            if($get_keys_R->num_rows > 0){
                while($row = $get_keys_R->fetch_assoc()){
                    // Decrypt key
                    $encryption_key = base64_decode($row['encryption_key']);
                    list($encrypted_data, $iv) = explode('::', base64_decode($recivedKey), 2);
                    $key = openssl_decrypt($encrypted_data, $row['encryption_method'], $encryption_key, 0, $iv);

                    // Check if key is valid
                    if($key == base64_decode($row['web_key'])){
                        // Close DB Connection
                        mysqli_close($databaseConnection);
                        return true;
                    }
                }
            }

            // Close DB Connection
            mysqli_close($databaseConnection);
        }
        return false;
    }

    function get_json_path($jsonFileName){
        return $_SERVER['DOCUMENT_ROOT'] . '\Config' . $jsonFileName;
    }

    // Get contents of json file
    function get_json($jsonFileName){
        $jsonString = file_get_contents(get_json_path($jsonFileName));
        return json_decode($jsonString, true);
    }

    // Saves data to json file
    function save_to_json($jsonFileName, $data){
        $jsonString = json_encode($data);
        file_put_contents(get_json_path($jsonFileName), $jsonString);
    }

    // Creates input for cms
    function create_cms_input($jsonFileName, $elementPath){
        if(check_key(($_SESSION['CMSActive']))){
            $data = get_json($jsonFileName);
            $data = $data[0];   // get most recent entry only in json file

            // Autofill textareas
            $textareaAutofill = "";
            $arrayLength = count($data);
            for($i = 0; $i < $arrayLength; $i++){
                if($data[$i]['element'] == $elementPath){
                    $textareaAutofill = $data[$i]['text'];
                    break;
                }
            }

            return '
                <div class="cms-input-container">
                    <input type="hidden" form="cms-form" name="cms-element[]" value="'.$elementPath.'">
                    <textarea form="cms-form" name="cms-text[]">'.$textareaAutofill.'</textarea>
                </div>';
        }
    }

    // Adds new entry to json file and removes the oldest
    // entry if needed
    if(isset($_POST['cms-save'])){
        // Get json file
        $data = get_json($_POST['jsonName']);
        if($data != NULL){
            // Check to see if the data was sent and format it
            if(is_array($_POST['cms-element']) && is_array($_POST['cms-text'])){
                // Get data from form
                foreach($_POST['cms-element'] as $rec=> $value){
                    $formData[$rec] = (object) ['element' => $_POST['cms-element'][$rec], 'text' => $_POST['cms-text'][$rec]];
                }
            }
            else{
                $formData = NULL;
            }

            // Prepend form data to json data
            if($formData != NULL){
                array_unshift($data, $formData);

                // Removes the oldest version of text
                if(count($data) > 4){
                    array_pop($data);
                }

                // Save to json file
                save_to_json($_POST['jsonName'], $data);
            }
        }
    }
    // Deletes the most recent entry in json file
    else if(isset($_POST['cms-undo'])){
        // Get contents of json file
        $data = get_json($_POST['jsonName']);
        if($data != NULL){
            // Remove first element of array if possible
            if(count($data) > 1){
                array_shift($data);
                save_to_json($_POST['jsonName'], $data);
            }
            else{
                $msg = "Cannot undo anymore changes.";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        }
    }
    // Clear key from session and close CMS
    else if(isset($_POST['cms-logoff'])){
        $_SESSION['CMSActive'] = "";
    }
?>