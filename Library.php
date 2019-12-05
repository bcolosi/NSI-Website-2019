<!DOCTYPE html>
<html>
    <?php include("includes/includes.html") ?>
    <head>
        <title>Library - NSI Nursing Solutions Inc.</title>
        <link rel="stylesheet" href="/includes/css/library.css">
        <script src="/includes/js/jquery.csv.min.js"></script>
        <script type="text/javascript">
            var sortInfo = new tblSortDir();
            $(document).ready(function() {
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
            <?php include("includes/header.html"); ?>
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
                                        <h1>Featured Article</h1>
                                        <h2>NSI National Health Care & RN Retention Report</h2>
                                        <p>
                                            This annual report is the most comprehensive study in 
                                            the industry which allows you to benchmark your 
                                            hospital's recruitment and turnover performance, and 
                                            understand emerging trends in the industry.
                                        </p>
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
                                    <h1>NSI Research Library</h1>
                                </div>
                                <div id="content-body">
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/case-study.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>NSI Case Study</h4>
                                                <p>
                                                    High turnover and vacancy rates were affecting the patient
                                                    experience at Citizens Medical Center. Focusing on quality 
                                                    of care and financial conservatism, CMC was determined to 
                                                    hire 21 experienced staff Registered Nurses.
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/Case_Study.pdf">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/nurse-solo.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>Travel Nurse Use Study</h4>
                                                <p>
                                                    This report compares the use and cost of travel nurses 
                                                    to hiring "Employed" nurses. It illustrates hospital 
                                                    cost savings and profit improvement. Discover how to 
                                                    receive an immediate cost savings, improve cash flow, 
                                                    enhance the bottom line and improve quality patient 
                                                    care services.
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/Travel_Vs_Core_Staff.pdf">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/foreign-nurse.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>Foreign Nurse Use Study</h4>
                                                <p>
                                                    This report compares the use and cost of foreign nurse 
                                                    recruitment to U.S. nurse recruitment. It illustrates 
                                                    hospital cost savings and profit improvement. Discover 
                                                    how to receive an immediate cost savings, improve cash 
                                                    flow, enhance the bottom line and improve quality 
                                                    patient care services.
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/Foreign_Vs_US_Recruitment.pdf">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container hidden-xs hidden-sm hidden-md col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/admin-nurse-group.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>Nurse Cultural Review</h4>
                                                <p>
                                                    This indicator identifies your hospital's culture 
                                                    and it's "attractiveness" as related to the retention of 
                                                    nurses. After evaluating each statement, a broad description 
                                                    of the cultural performance, and suggestions to enhance 
                                                    employee morale, engagement and retention will be provided.
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a href="/Documents/Library/Nurse_Cultural_Review.xlsx">Take Survey</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/labor-mkt.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>RN Labor Market Update</h4>
                                                <p>
                                                    A current and high-level analysis of the RN labor 
                                                    market. Topics include: workforce analytics, 
                                                    labor statistics, vacancy rates, turnover, staffing 
                                                    trends, survey results, recruitment metrics, etc...
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/RN_Labor_Market_Update.pdf">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/news.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>NSI In The News</h4>
                                                <p>
                                                    Scroll through featured articles and coverage of 
                                                    NSI in the media.
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a class="modal-open-button">View Articles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/ceo.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>H.E.L.P. Survey Results (CEO)</h4>
                                                <p>
                                                    The Hospital Executive Level Priorities (H.E.L.P.) 
                                                    survey takes the annual pulse of hospital CEOs to 
                                                    understand the top challenges and issues facing healthcare.
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/HELP-CEO.pdf">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/chro.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>H.E.L.P. Survey Results (CHRO)</h4>
                                                <p>
                                                    The Hospital Executive Level Priorities (H.E.L.P.) 
                                                    survey takes the annual pulse of senior Human Resource
                                                    Executives to understand the top challenges and issues 
                                                    facing healthcare.
                                                </p>
                                            </div>
                                            <div class="link-btn">
                                                <a target="_blank" href="/Documents/Library/HELP-CHRO.pdf">View Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-box-container col-xs-12 col-sm-6 col-lg-4">
                                        <div class="content-box library-content-box">
                                            <div class="content-box-img">
                                                <img src="includes/images/cne.jpg">
                                            </div>
                                            <div class="content-box-text">
                                                <h4>H.E.L.P. Survey Results (CNE)</h4>
                                                <p>
                                                    The Hospital Executive Level Priorities (H.E.L.P.) 
                                                    survey takes the annual pulse of senior Nursing
                                                    Executives to understand the top challenges and issues 
                                                    facing healthcare.
                                                </p>
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
            <?php include("includes/footer.html"); ?>
        </div>
    </body>
</html>