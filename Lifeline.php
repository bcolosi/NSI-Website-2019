<?php include($_SERVER['DOCUMENT_ROOT']."/includes/admin_functions.php"); ?>
<!DOCTYPE html>
<html>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/includes.html") ?>
    <head>
        <title>Lifeline - NSI Nursing Solutions Inc.</title>
        <link rel="stylesheet" href="/includes/css/lifeline.css">
        <script src="/includes/js/jquery.csv.min.js"></script>
        <script type="text/javascript">
            // Vars
            var listSortInfo = new tblSortDir();
            var urlParams = getUrlParams();
            var type = urlParams["type"];
            var tableHeaderClass = type+"-header";

            $(document).ready(function() {
                // Fill in table header
                $('#table-header').addClass(tableHeaderClass);
                
                // Loads the text for the page
                $('body').loadPageText('/Config/Lifeline.json');

                // List handlers
                $('#table-list').listHandler('/Documents/Lifeline/'+type+'_lifeline.csv', 'table-list', 'table-list-header');
                $('.table-list-container table').tableSort('table-list-body', listSortInfo);
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/includes/header.html");
                if(check_key($_SESSION['CMSActive'])){
                    $jsonFileName = '/Lifeline.json';
                    include($_SERVER['DOCUMENT_ROOT']."/includes/cms_menu.html");
                    echo '<input type="hidden" form="cms-form" name="jsonName" value="'.$jsonFileName.'">';

                    // Determines the cms input order of the table header
                    if(isset($_GET['type']) && $_GET['type'] != ""){
                        $tblHdrArray = ['CEO-COO', 'CHRO', 'CFO', 'CNO'];
                        $tblHdrArrayLength = count($tblHdrArray);
                        if($tblHdrArray[0] != $_GET['type']){
                            for($i = 1; $i < $tblHdrArrayLength; $i++){
                                if($tblHdrArray[$i] == $_GET['type']){
                                    $tmp = $tblHdrArray[0];
                                    $tblHdrArray[0] = $tblHdrArray[$i];
                                    $tblHdrArray[$i] = $tmp;
    
                                    break;
                                }
                            }
                        }
                    }
                }
            ?>
            <div id="main-content">
                <div id="banner-img">
                    <img src="/includes/images/banner/handshake.jpg">
                    <div class="overlay">
                        <h2 class="cms-item"></h2>
                        <?php echo create_cms_input($jsonFileName, '#banner-img .overlay h2'); ?>
                        <p class="cms-item"></p>
                        <?php echo create_cms_input($jsonFileName, '#banner-img .overlay p'); ?>
                    </div>
                </div>
                <div id="region-three" class="texture-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 id="table-header" class="cms-item"></h1>
                                    <?php
                                        if(isset($_GET['type']) && $_GET['type'] != ""){
                                            $tblHdrPrefix = "#region-three #content-head .";
                                            $tblHdrSuffix = "-header";
                                            for($i = 0; $i < $tblHdrArrayLength; $i++){
                                                $tblHdrPath = $tblHdrPrefix . $tblHdrArray[$i] . $tblHdrSuffix;
                                                echo create_cms_input($jsonFileName, $tblHdrPath);
                                            }
                                        }
                                    ?>
                                </div>
                                <div id="content-body">
                                    <div class="content-text last-updated">
                                        <?php
                                            if(isset($_GET['type']) && $_GET['type'] != ""){
                                                $csvPath = $_SERVER['DOCUMENT_ROOT']."/Documents/Lifeline/".$_GET['type']."_lifeline.csv";
                                                $lastUpdated = date('F j, Y', filemtime($csvPath));
                                                echo "Last Updated: ".$lastUpdated;
                                            }
                                        ?>
                                    </div>
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
            <?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.html"); ?>
        </div>
    </body>
</html>