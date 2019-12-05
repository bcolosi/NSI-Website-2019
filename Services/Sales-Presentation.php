<!DOCTYPE html>
<html>
    <?php include("../includes/includes.html") ?>
    <head>
        <title>Sales Presentation - NSI Nursing Solutions Inc.</title>
        <meta name="description" content="The nursing shortage is challenging all health care organizations. Review our sales presentation to learn how NSI can help you replace costly travel RNs with experienced nurses as your employees.">
        <link rel="stylesheet" href="/includes/css/sales-presentation.css">
        <script type="text/javascript">
            $(document).ready(function() {
                $('#pwr-pt-pres').loadPresentation();
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php include("../includes/header.html"); ?>
            <div id="main-content">
                <div id="banner-img">
                    <img src="/includes/images/banner/business-meeting.jpg">
                    <div class="overlay">
                        <h2>About Us</h2>
                        <p>
                            The nursing shortage continues to challenge all health care 
                            organizations to hire experienced nurses. Since 2000, hospitals 
                            have partnered with NSI to quickly solve their staffing shortage. 
                            Whether you need to hire 20 or 200 experienced RNs, NSI has the 
                            national reach and experience to meet your recruitment goals. 
                        </p>
                        <p>
                            Enjoy the presentation below to learn about NSI and 
                            begin your path to full staffing.
                        </p>
                    </div>
                </div>
                <div id="region-three" class="pwr-pt-bkgrd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1>Sales Presentation</h1>
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
            <?php include("../includes/footer.html"); ?>
        </div>
    </body>
</html>