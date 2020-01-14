<?php
    include($_SERVER['DOCUMENT_ROOT']."/includes/admin_functions.php");
    if(isset($_POST['CMSkey'])){
        if(check_key($_POST['CMSkey'])){
            $_SESSION['CMSActive'] = $_POST['CMSkey'];
            echo "<script type='text/javascript'>alert('CMS Active!');</script>";
        }
        else{
            if(isMobile()){
                echo "<script type='text/javascript'>alert('CMS not available on mobile devices.');</script>";
            }
            $_SESSION['CMSActive'] = "";
        }
    }
?>

<!DOCTYPE html>
<html>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/includes.html"); ?>
    <head>
        <title>Welcome to NSI Nursing Solutions Inc.</title>
        <meta name="description" content="NSI Nursing Solutions inc. is the national leader in high volume recruitment of American experienced Registered Nurses. Our focus is on the permanent placement of staff RNs and provide retention consulting to further protect your investment.  Contact NSI to solve your staffing shortage or learn about full time nursing opportunities/RN jobs.">
        <link rel="canonical" href="http://nsinursingsolutions.com/"/>
        <link rel="stylesheet" href="/includes/css/flexslider.css">
        <link rel="stylesheet" href="/includes/css/home.css">
        <script src="/includes/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // Loads the text for the page
                $('body').loadPageText('/Config/Home.json');

                // Initializes flexslider
                $('.flexslider').flexslider({
                    animation: "slide",
                    slideshow: true,
                    slideshowSpeed: 10000,
                    pauseOnHover: false
                });

                $('.slides img').css({height: '', width: ''});
                setTimeout(function(){
                    $('#region-one').homeRegOneContentBoxHandler({});
                }, 1000);
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/includes/header.html");
                if(check_key($_SESSION['CMSActive'])){
                    $jsonFileName = '/Home.json';
                    include($_SERVER['DOCUMENT_ROOT']."/includes/cms_menu.html");
                    echo '<input type="hidden" form="cms-form" name="jsonName" value="'.$jsonFileName.'">';
                }
            ?>
            <div id="main-content">
                <div id="slidebox" class="flexslider hidden-xs">
                    <ul class="slides">
                        <li>
                            <img src="/includes/images/slidebox/exe-nurses-slidebox.jpg">
                            <div class="slide-overlay slide1-overlay vertically-center">
                                <div class="slide-overlay-text-container">
                                    <div class="slide-overlay-text">
                                        <h2 class="cms-item"></h2>
                                        <?php echo create_cms_input($jsonFileName, '.slide1-overlay h2'); ?>
                                        <p class="cms-item"></p>
                                        <?php echo create_cms_input($jsonFileName, '.slide1-overlay p'); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="/includes/images/slidebox/nurse-patient.jpg">
                            <div class="slide-overlay slide2-overlay vertically-center">
                                <div class="slide-overlay-text-container">
                                    <div class="slide-overlay-text">
                                        <h2 class="cms-item"></h2>
                                        <?php echo create_cms_input($jsonFileName, '.slide2-overlay h2'); ?>
                                        <p class="cms-item"></p>
                                        <?php echo create_cms_input($jsonFileName, '.slide2-overlay p'); ?>
                                        <a href="/Job-Seekers/Job-Openings.php">Job Openings</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="/includes/images/slidebox/under-construction.jpg" style="height: 600px; width: auto">
                            <div class="slide-overlay slide3-overlay vertically-center">
                                <div class="slide-overlay-text-container">
                                    <div class="slide-overlay-text">
                                        <h2 class="cms-item"></h2>
                                        <?php echo create_cms_input($jsonFileName, '.slide3-overlay h2'); ?>
                                        <p class="cms-item"></p>
                                        <?php echo create_cms_input($jsonFileName, '.slide3-overlay p'); ?>
                                        <a href="/Services/Sales-Presentation.php">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="/includes/images/slidebox/admin-slidebox.jpg">
                            <div class="slide-overlay slide4-overlay vertically-center">
                                <div class="slide-overlay-text-container">
                                    <div class="slide-overlay-text">
                                        <h2 class="cms-item"></h2>
                                        <?php echo create_cms_input($jsonFileName, '.slide4-overlay h2'); ?>
                                        <p class="cms-item"></p>
                                        <?php echo create_cms_input($jsonFileName, '.slide4-overlay p'); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="/includes/images/slidebox/nurses-slidebox.jpg">
                            <div class="slide-overlay slide5-overlay vertically-center">
                                <div class="slide-overlay-text-container">
                                    <div class="slide-overlay-text">
                                        <h2 class="cms-item"></h2>
                                        <?php echo create_cms_input($jsonFileName, '.slide5-overlay h2'); ?>
                                        <p class="cms-item"></p>
                                        <?php echo create_cms_input($jsonFileName, '.slide5-overlay p'); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="region-one" class="region-one-bkgrd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 class="cms-item"></h1>
                                    <?php echo create_cms_input($jsonFileName, '#region-one #content-head h1'); ?>
                                </div>
                                <div id="content-body">
                                    <div class="content-box-container">
                                        <div class="content-box">
                                            <div class="content-list hospital-content-list col-md-6">
                                                <div class="services-header">
                                                    <h2 class="cms-item"></h2>
                                                    <?php echo create_cms_input($jsonFileName, '#region-one .hospital-content-list .services-header h2'); ?>
                                                </div>
                                                <div class="content-list-container">
                                                    <ul>
                                                        <li class="content-list-li1">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .hospital-content-list .content-list-li1 p'); ?>
                                                        </li>
                                                        <li class="content-list-li2">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .hospital-content-list .content-list-li2 p'); ?>
                                                        </li>
                                                        <li class="content-list-last content-list-li3">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .hospital-content-list .content-list-li3 p'); ?>
                                                        </li>
                                                        <li class="content-list-li4">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .hospital-content-list .content-list-li4 p'); ?>
                                                        </li>
                                                        <li class="content-list-li5">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .hospital-content-list .content-list-li5 p'); ?>
                                                        </li>
                                                        <li class="content-list-last content-list-li6">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .hospital-content-list .content-list-li6 p'); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="link-btn white-link-btn">
                                                    <a href="/Services/Sales-Presentation.php">Learn More</a>
                                                </div>
                                            </div>
                                            <div class="content-list-img hospital-content-list-img col-md-6">
                                                <img src="includes/images/admin-shakes-nurse-hand.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row next-row">
                            <div id="content">
                                <div id="content-body">
                                    <div class="content-box-container">
                                        <div class="content-box">
                                            <div class="content-list-img nurse-content-list-img col-md-6">
                                                <img src="includes/images/nurses-clipboard.jpg">
                                            </div>
                                            <div class="content-list nurse-content-list col-md-6">
                                                <div class="services-header">
                                                    <h2 class="cms-item"></h2>
                                                    <?php echo create_cms_input($jsonFileName, '#region-one .nurse-content-list .services-header h2'); ?>
                                                </div>
                                                <div class="content-list-container">
                                                    <ul>
                                                        <li class="content-list-li1">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .nurse-content-list .content-list-li1 p'); ?>
                                                        </li>
                                                        <li class="content-list-li2">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .nurse-content-list .content-list-li2 p'); ?>
                                                        </li>
                                                        <li class="content-list-last content-list-li3">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .nurse-content-list .content-list-li3 p'); ?>
                                                        </li>
                                                        <li class="content-list-li4">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .nurse-content-list .content-list-li4 p'); ?>
                                                        </li>
                                                        <li class="content-list-li5">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .nurse-content-list .content-list-li5 p'); ?>
                                                        </li>
                                                        <li class="content-list-last content-list-li6">
                                                            <p class="content-list-text cms-item"></p>
                                                            <?php echo create_cms_input($jsonFileName, '#region-one .nurse-content-list .content-list-li6 p'); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="link-btn white-link-btn">
                                                    <a href="/Job-Seekers/Job-Openings.php">Job Openings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="region-two" class="hallway-bkgrd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 class="cms-item"></h1>
                                    <?php echo create_cms_input($jsonFileName, '#region-two #content-head h1'); ?>
                                </div>
                                <div id="content-body">
                                    <div class="content-box-container col-xs-12 col-sm-6 col-md-4">
                                        <div class="content-box content-box1">
                                            <div class="content-box-img">
                                                <img src="includes/images/box-1.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .content-box1 .content-box-text h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .content-box1 .content-box-text p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a href="/Services/Sales-Presentation.php">Learn More</a>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-md-4">
                                        <div class="content-box content-box2">
                                            <div class="content-box-img">
                                                <img src="includes/images/nurses-walking.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .content-box2 .content-box-text h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .content-box2 .content-box-text p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a href="/Services/Savings-Calculator.php">Calculator</a>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="hidden-xs hidden-md hidden-lg col-sm-3"></div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-md-4">
                                        <div class="content-box content-box3">
                                            <div class="content-box-img">
                                                <img src="includes/images/nurse-group.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4 class="cms-item"></h4>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .content-box3 .content-box-text h4'); ?>
                                                <p class="cms-item"></p>
                                                <?php echo create_cms_input($jsonFileName, '#region-two .content-box3 .content-box-text p'); ?>
                                            </div>
                                            <div class="link-btn">
                                                <a href="/Job-Seekers/Job-Openings.php">Get Started</a>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="hidden-xs hidden-md hidden-lg col-sm-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="region-three" class="texture-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content" class="col-md-6">
                                <div id="content-head">
                                    <h1 class="cms-item"></h1>
                                    <?php echo create_cms_input($jsonFileName, '#region-three #content-head h1'); ?>
                                </div>
                                <div id="content-body">
                                    <div class="content-text justify-text cms-item"></div>
                                    <?php echo create_cms_input($jsonFileName, '#region-three #content-body .content-text'); ?>
                                </div>
                            </div>
                            <div id="content-img" class="col-md-6 who-we-are-img">
                                <img src="includes/images/generations.jpg">
                                <div class="pic-caption cms-item"></div>
                                <?php echo create_cms_input($jsonFileName, '#region-three .pic-caption'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
        </div>
    </body>
</html>