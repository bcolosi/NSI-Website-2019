<?php
    $LastUpdated = $_POST["LastUpdatedLifeline"];
    $fileArray = [
        $_FILES["RNLifeline"],
        $_FILES["RNLifelineCS"],
        $_FILES["CEOLifeline"],
        $_FILES["CFOLifeline"],
        $_FILES["CHROLifeline"],
        $_FILES["CNOLifeline"],
        $_FILES["RetentionStudy"],
        $_FILES["CaseStudy"],
        $_FILES["TravelVsCore"],
        $_FILES["ForeignVsUS"],
        $_FILES["CulturalReview"],
        $_FILES["RNLaborMarket"],
        $_FILES["NSIinTheNews"],
        $_FILES["HELPCEO"],
        $_FILES["HELPCHRO"],
        $_FILES["HELPCNO"],
        $_FILES["SalesPresentation"],
        $_FILES["Testimonials"],
    ];
    $fileNameArray = [
        "job_openings.csv",
        "job_openings_coming_soon.csv",
        "CEO-COO_lifeline.csv",
        "CFO_lifeline.csv",
        "CHRO_lifeline.csv",
        "CNO_lifeline.csv",
        "NSI_National_Health_Care_Retention_Report.pdf",
        "Case_Study.pdf",
        "Travel_Vs_Core_Staff.pdf",
        "Foreign_Vs_US_Recruitment.pdf",
        "Nurse_Cultural_Review.xlsw",
        "RN_Labor_Market_Update.pdf",
        "NSI_In_The_News.csv",
        "HELP-CEO.pdf",
        "HELP-CHRO.pdf",
        "HELP-CNE.pdf",
        "SalesPresentation.pdf",
        "Testimonials_RN.csv",
    ];
    $fileArrayLength = count($fileArray);

    for($i = 0; $i < $fileArrayLength; $i++){
        if(!isset($fileArray[$i]){
            $log = date("F j, Y, g:i a").": No file was uploade, therefore it will be ignored. ".PHP_EOL;
        }
        else if($fileArray[$i]["error"] == UPLOAD_ERR_OK)){
            $tempName = $fileArray[$i]["tmp_name"];
            $target = "./Documents/". $fileNameArray[$i];
            if(move_uploaded_file($tempName, $target)){
                $log = date("F j, Y, g:i a").": Attempt for ".$target." Successful.".PHP_EOL;
            }
        }
        else{
            $log = date("F j, Y, g:i a").": ERROR! Attempt for ".$target." Failed. ". $fileArray[$i]["error"] .PHP_EOL;
        }
        
        //file_put_contents("./Logs/file_upload_log.log", $log, FILE_APPEND);
    }
    

    header("Location: http://nsiats.azurewebsites.net/WebsitePortal.php");
?>
