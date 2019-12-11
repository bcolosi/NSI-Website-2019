<?php include($_SERVER['DOCUMENT_ROOT']."/includes/admin_functions.php"); ?>
<!DOCTYPE html>
<html>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/includes.html") ?>
    <head>
        <title>Contact Us - NSI Nursing Solutions Inc.</title>
        <meta name="description" content="Should you have any questions or wish to learn more about NSI Nursing Solutions inc, please contact us.">
        <link rel="stylesheet" href="/includes/css/contact.css">
        <script type="text/javascript">
            var sortInfo = new tblSortDir();
            $(document).ready(function() {
                // Loads the text for the page
                $('body').loadPageText('/Config/Contact.json');
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/includes/header.html");
                if(check_key($_SESSION['CMSActive'])){
                    $jsonFileName = '/Contact.json';
                    include($_SERVER['DOCUMENT_ROOT']."/includes/cms_menu.html");
                    echo '<input type="hidden" form="cms-form" name="jsonName" value="'.$jsonFileName.'">';
                }
            ?>
            <div id="main-content">
                <div id="banner-img">
                    <img src="/includes/images/banner/contact-us.jpg">
                </div>
                <div id="region-three">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-body">
                                    <div class="col-md-4">
                                        <div class="contact-col contact-col1"></div>
                                    </div>
                                    <div class="col-md-4 contact-border">
                                        <div class="contact-col contact-col2"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="contact-col contact-col3"></div>
                                        <div class="link-btn">
                                            <a href="/Job-Seekers/Application.php">Apply Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html") ?>
        </div>
    </body>
</html>