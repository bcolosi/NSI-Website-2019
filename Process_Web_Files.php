<?php
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
        $_FILES["Testimonials"]
    ];
    $fileNameArray = [
        "job_openings.csv",
        "job_openings_coming_soon.csv",
        "Lifeline/CEO-COO_lifeline.csv",
        "Lifeline/CFO_lifeline.csv",
        "Lifeline/CHRO_lifeline.csv",
        "Lifeline/CNO_lifeline.csv",
        "Library/NSI_National_Health_Care_Retention_Report.pdf",
        "Library/Case_Study.pdf",
        "Library/Travel_Vs_Core_Staff.pdf",
        "Library/Foreign_Vs_US_Recruitment.pdf",
        "Library/Nurse_Cultural_Review.xlsw",
        "Library/RN_Labor_Market_Update.pdf",
        "Library/NSI_In_The_News.csv",
        "Library/HELP-CEO.pdf",
        "Library/HELP-CHRO.pdf",
        "Library/HELP-CNE.pdf",
        "SalesPresentation.pdf",
        "Testimonials_RN.csv"
    ];
    $fileArrayLength = count($fileArray);
	
    for($i = 0; $i < $fileArrayLength; $i++){
        if(!isset($fileArray[$i])){
            $log = date("F j, Y, g:i a").": No file was uploaded, therefore it will be ignored. ".PHP_EOL;
        }
        else if($fileArray[$i]["error"] == UPLOAD_ERR_OK){
            $tempName = $fileArray[$i]["tmp_name"];
			$target = "Documents/". $fileNameArray[$i];
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