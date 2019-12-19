<?php include($_SERVER['DOCUMENT_ROOT']."/includes/admin_functions.php"); ?>
<!DOCTYPE html>
<html>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/includes.html") ?>
    <head>
        <title>Sales Presentation - NSI Nursing Solutions Inc.</title>
        <meta name="description" content="The nursing shortage is challenging all health care organizations. Review our sales presentation to learn how NSI can help you replace costly travel RNs with experienced nurses as your employees.">
        <link rel="stylesheet" href="/includes/css/sales-presentation.css">
        <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // Loads the text for the page
                $('body').loadPageText('/Config/Presentation.json');
                
                $('#pwr-pt-pres').loadPresentation();
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/includes/header.html");
                if(check_key($_SESSION['CMSActive'])){
                    $jsonFileName = '/Presentation.json';
                    include($_SERVER['DOCUMENT_ROOT']."/includes/cms_menu.html");
                    echo '<input type="hidden" form="cms-form" name="jsonName" value="'.$jsonFileName.'">';
                }
            ?>
            <div id="main-content">
                <div id="banner-img">
                    <img src="/includes/images/banner/business-meeting.jpg">
                    <div class="overlay">
                        <h2 class="cms-item"></h2>
                        <?php echo create_cms_input($jsonFileName, '#banner-img .overlay h2'); ?>
                        <div class="overlay-txt cms-item"></div>
                        <?php echo create_cms_input($jsonFileName, '#banner-img .overlay .overlay-txt'); ?>
                    </div>
                </div>
                <div id="region-three" class="pwr-pt-bkgrd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 class="cms-item"></h1>
                                    <?php echo create_cms_input($jsonFileName, '#region-three #content-head h1'); ?>
                                </div>
                                <div id="content-body">
                                    <div class="pwr-pt-wrapper">
                                        <div class="pwr-pt-controls">
                                            <a class="next-slide"><div class="arrow"></div></a>
                                            <a class="prev-slide"><div class="arrow"></div></a>
                                            <span class="page_info">Page: 
                                                <span id="page_num"></span> / <span id="page_count"></span>
                                            </span>
                                        </div>
                                        <div class="pwr-pt-container">
                                            <div class="slide-controls-overlay prev-slide"></div>
                                            <div class="slide-controls-overlay next-slide"></div>
                                            <canvas id="pwr-pt-pres"></canvas>
                                        </div>
                                    </div>
                                    <div class="btn-container">
                                        <div class="link-btn">
                                            <a target="_blank" href="/Documents/SalesPresentation.pdf" class="hidden-xs hidden-sm">Print/Download</a>
                                        </div>
                                        <div class="link-btn">
                                            <a target="_blank" href="mailto:macolosi@nsinursingsolutions.com?subject=NSI%20Inquiry">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
        </div>
    </body>
</html>