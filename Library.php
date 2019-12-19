<?php include($_SERVER['DOCUMENT_ROOT']."/includes/admin_functions.php"); ?>
<!DOCTYPE html>
<html>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/includes.html") ?>
    <head>
        <title>Library - NSI Nursing Solutions Inc.</title>
        <link rel="stylesheet" href="/includes/css/library.css">
        <script src="/includes/js/jquery.csv.min.js"></script>
        <script type="text/javascript">
            var sortInfo = new tblSortDir();
            $(document).ready(function() {
                // Loads the text for the page
                $('body').loadPageText('/Config/Library.json');
                
                // List handlers
                $('#table-list').libNewsHandler();

                // modal handlers
                $('.modal-open-button').openModal();
                $('.modal .close').closeModal();
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/includes/header.html");
                if(check_key($_SESSION['CMSActive'])){
                    $jsonFileName = '/Library.json';
                    include($_SERVER['DOCUMENT_ROOT']."/includes/cms_menu.html");
                    echo '<input type="hidden" form="cms-form" name="jsonName" value="'.$jsonFileName.'">';
                }
            ?>
            <div id="main-content">
                <div class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h2>NSI In The News: </h2>
                        </div>
                        <div class="modal-body">
                            <div class="table-list-container">
                                <table id="table-list-header">
                                    <thead></thead>
                                </table>
                                <table id="table-list">
                                    <thead></thead>
                                    <tbody id="table-list-body"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="banner-img">
                    <img src="/includes/images/banner/lib-top.jpg">
                </div>
                <div id="region-one" class="featured-article-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-body">
                                    <div class="featured-article-img hidden-xs col-md-6">
                                        <img src="includes/images/turnover.jpg">
                                    </div>
                                    <div class="content-text center-text col-md-6">
                                        <h1 class="cms-item"></h1>
                                        <?php echo create_cms_input($jsonFileName, '#region-one .content-text h1'); ?>
                                        <h2 class="cms-item"></h2>
                                        <?php echo create_cms_input($jsonFileName, '#region-one .content-text h2'); ?>
                                        <p class="cms-item"></p>
                                        <?php echo create_cms_input($jsonFileName, '#region-one .content-text p'); ?>
                                        <div class="link-btn featured-article-btn">
                                            <a target="_blank" href="/Documents/Library/NSI_National_Health_Care_Retention_Report.pdf">Read Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="region-two" class="library-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 class="cms-item"></h1>
                                    <?php echo create_cms_input($jsonFileName, '#region-two #content-head h1'); ?>
                                </div>
                                <div id="content-body">
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box1">
                                            <div class="content-box-img">
                                                <img src="includes/images/case-study.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box1 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box1 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/Case_Study.pdf">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box2">
                                            <div class="content-box-img">
                                                <img src="includes/images/nurse-solo.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box2 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box2 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/Travel_Vs_Core_Staff.pdf">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box3">
                                            <div class="content-box-img">
                                                <img src="includes/images/foreign-nurse.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box3 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box3 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/Foreign_Vs_US_Recruitment.pdf">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container hidden-xs hidden-sm hidden-md col-lg-4">
                                        <div class="content-box library-content-box library-content-box4">
                                            <div class="content-box-img">
                                                <img src="includes/images/admin-nurse-group.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box4 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box4 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a href="/Documents/Library/Nurse_Cultural_Review.xlsx">Take Survey</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box5">
                                            <div class="content-box-img">
                                                <img src="includes/images/labor-mkt.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box5 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box5 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/RN_Labor_Market_Update.pdf">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box6">
                                            <div class="content-box-img">
                                                <img src="includes/images/news.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box6 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box6 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a class="modal-open-button">View Articles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box7">
                                            <div class="content-box-img">
                                                <img src="includes/images/ceo.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box7 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box7 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/HELP-CEO.pdf">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box8">
                                            <div class="content-box-img">
                                                <img src="includes/images/chro.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box8 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box8 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/HELP-CHRO.pdf">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box library-content-box9">
                                            <div class="content-box-img">
                                                <img src="includes/images/cne.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box9 h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .library-content-box9 p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/HELP-CNE.pdf">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="region-three" class="hidden-xs hidden-sm">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-body">
                                    
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