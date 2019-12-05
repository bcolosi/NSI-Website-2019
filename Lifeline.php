<!DOCTYPE html>
<html>
    <?php include("includes/includes.html") ?>
    <head>
        <title>Lifeline - NSI Nursing Solutions Inc.</title>
        <link rel="stylesheet" href="/includes/css/lifeline.css">
        <script src="/includes/js/jquery.csv.min.js"></script>
        <script type="text/javascript">
            // Vars
            var listSortInfo = new tblSortDir();
            var urlParams = getUrlParams();
            var type = urlParams["type"];
            var tableHeader;

            // Format table header text
            if(type == null){
                tableHeader = "Unable to find the selected lifeline.";
                type = "invalid";
            }
            else if(type == "CEO-COO"){
                tableHeader = "CEO and COO Opportunities";
            }
            else if(type == "CHRO"){
                tableHeader = "CHRO and VPHR Opportunities";
            }
            else{
                tableHeader = type + " Opportunities";
            }

            $(document).ready(function() {
                // Fill in table header
                $('#table-header').html(tableHeader);

                // List handlers
                $('#table-list').listHandler('/Documents/Lifeline/'+type+'_lifeline.csv', 'table-list', 'table-list-header');
                $('.table-list-container table').tableSort('table-list-body', listSortInfo);
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php include("includes/header.html"); ?>
            <div id="main-content">
                <div id="banner-img">
                    <img src="/includes/images/banner/handshake.jpg">
                    <div class="overlay">
                        <h2>Lifeline</h2>
                        <p>
                            Lifeline provides senior-level executives with 
                            a place to both network and locate job opportunities.  
                            Lifeline is updated monthly, so check back often.
                            If you would like to add a position to Lifeline or  
                            if you want to receive this free monthly publication, 
                            please contact Michael Colosi at 
                            <a class="overlay-link" href="mailto:macolosi@nsinursingsolutions.com?subject=NSI%20Inquiry">
                                macolosi@nsinursingsolutions.com
                            </a>.
                        </p>
                    </div>
                </div>
                <div id="region-three" class="texture-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 id="table-header"></h1>
                                </div>
                                <div id="content-body">
                                    <div class="content-text last-updated"></div>
                                    <div class="table-list-container">
                                        <table id="table-list-header" class="hidden-xs">
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
                    </div>
                </div>
            </div>
            <?php include("includes/footer.html"); ?>
        </div>
    </body>
</html>