<?php include($_SERVER['DOCUMENT_ROOT']."/includes/admin_functions.php"); ?>
<!DOCTYPE html>
<html>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/includes.html") ?>
    <head>
        <title>FAQ - NSI Nursing Solutions Inc.</title>
        <link rel="stylesheet" href="/includes/css/faq.css">
        <script type="text/javascript">
            $(document).ready(function() {
                // Loads the text for the page
                $('body').loadPageText('/Config/faq.json');
                
                $('.faq-dropdown-container .dropdown').collapseObj('click', 'dropdown-active');
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/includes/header.html");
                if(check_key($_SESSION['CMSActive'])){
                    $jsonFileName = '/faq.json';
                    include($_SERVER['DOCUMENT_ROOT']."/includes/cms_menu.html");
                    echo '<input type="hidden" form="cms-form" name="jsonName" value="'.$jsonFileName.'">';
                }
            ?>
            <div id="main-content">
                <div id="banner-img">
                    <img src="/includes/images/banner/man-w-raised-hand.jpg">
                </div>
                <div id="region-three">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 class="cms-item"></h1>
                                    <?php echo create_cms_input($jsonFileName, '#region-three #content-head h1'); ?>
                                </div>
                                <div id="content-body">
                                    <div class="col-md-6">
                                        <div class="faq-dropdown-container faq-box1">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box1 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box1 .dropdown-content p'); ?>
                                            </div>
                                        </div>
                                        <div class="faq-dropdown-container faq-box2">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box2 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box2 .dropdown-content p'); ?>
                                            </div>
                                        </div>
                                        <div class="faq-dropdown-container faq-box3">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box3 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box3 .dropdown-content p'); ?>
                                            </div>
                                        </div>
                                        <div class="faq-dropdown-container faq-box4">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box4 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box4 .dropdown-content p'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="faq-dropdown-container faq-box5">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box5 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box5 .dropdown-content p'); ?>
                                            </div>
                                        </div>
                                        <div class="faq-dropdown-container faq-box6">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box6 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box6 .dropdown-content p'); ?>
                                            </div>
                                        </div>
                                        <div class="faq-dropdown-container faq-box7">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box7 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box7 .dropdown-content p'); ?>
                                            </div>
                                        </div>
                                        <div class="faq-dropdown-container faq-box8">
                                            <div class="dropdown">
                                                <strong class="cms-item"></strong>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box8 strong'); ?>
                                            </div>
                                            <div class="dropdown-content">
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-three .faq-box8 .dropdown-content p'); ?>
                                            </div>
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