<?php include($_SERVER['DOCUMENT_ROOT']."/includes/admin_functions.php"); ?>
<!DOCTYPE html>
<html>
    <?php include($_SERVER['DOCUMENT_ROOT']."/includes/includes.html") ?>
    <head>
        <title>Apply Now - NSI Nursing Solutions Inc.</title>
        <meta name="description" content="Apply now and let our experienced team of recruiters find your next job.">
        <link rel="stylesheet" href="/includes/css/application.css">
        <script src="/includes/js/jquery.csv.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // Loads the text for the page
                $('body').loadPageText('/Config/Application.json');
                
                $('#content-bkgrd-quotes').quoteHandler({});
                $('.input-phone-num').change(function(){ $(this).val(formatPhoneNum($(this).val())); });
                $('#contact-form').submit(function(){
                    alert("Thank you for applying to NSI Nursing Solutions, inc.  A representative will reach out to you shortly.  If you wish to contact us, please call (866) 266-8748.  Our office hours are M-F, 8:00am to 5:00pm, EST.");
                });
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php
                include($_SERVER['DOCUMENT_ROOT']."/includes/header.html");
                if(check_key($_SESSION['CMSActive'])){
                    $jsonFileName = '/Application.json';
                    include($_SERVER['DOCUMENT_ROOT']."/includes/cms_menu.html");
                    echo '<input type="hidden" form="cms-form" name="jsonName" value="'.$jsonFileName.'">';
                }
            ?>
            <div id="main-content">
                <div id="region-one" class="process-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1></h1>
                                </div>
                                <div id="content-body">
                                    <div class="process-step process-step1 col-md-3">
                                        <h2 class="process-header"></h2>
                                        <ol class="nsi-process-list">
                                            <li class="process-list-li1"></li>
                                            <li class="process-list-li2"></li>
                                            <li class="process-list-li3"></li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="process-mid-col">
                                            <td class="arrow-container hidden-xs hidden-sm">
                                                <div class="next-arrow left">
                                                    <div class="next-arrow-body"></div>
                                                    <div class="next-arrow-head"></div>
                                                </div>
                                            </td>
                                            <td class="process-step process-step2 process-info">
                                                <div class="process-header-container">
                                                    <h2 class="process-header"></h2>
                                                </div>
                                                <ol class="nsi-process-list">
                                                    <li class="process-list-li1"></li>
                                                    <li class="process-list-li2"></li>
                                                    <li class="process-list-li3"></li>
                                                </ol>
                                            </td>
                                            <td class="arrow-container hidden-xs hidden-sm">
                                                <div class="next-arrow right">
                                                    <div class="next-arrow-body"></div>
                                                    <div class="next-arrow-head"></div>
                                                </div>
                                            </td>
                                        </table>
                                    </div>
                                    <div class="process-step process-step3 col-md-3">
                                        <div class="process-header-container">
                                            <h2 class="process-header"></h2>
                                        </div>
                                        <ol class="nsi-process-list">
                                            <li class="process-list-li1"></li>
                                            <li class="process-list-li2"></li>
                                            <li class="process-list-li3"></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="region-two" class="form-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1></h1>
                                </div>
                                <div id="content-body">
                                    <div id="content-bkgrd-quotes" class="">
                                        <div class="bkgrd-quotes-left col-md-6"></div>
                                        <div class="bkgrd-quotes-right col-md-6"></div>
                                    </div>
                                    <div class="content-box app-content-box">
                                        <div class="center-text content-text">
                                            <h2 class="application-header"></h2>
                                        </div>
                                        <form id="contact-form" action="http://nsiats.azurewebsites.net/insertPending.php" method="POST">
                                            <table class="form-table">
                                                <tbody>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">First Name</label>
                                                        </td>
                                                        <td>
                                                            <input name="FirstName" type="text" class="form-input" required>
                                                        </td>
                                                    </tr>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">Last Name</label>
                                                        </td>
                                                        <td>
                                                            <input name="LastName" type="text" class="form-input" required>
                                                        </td>
                                                    </tr>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">Street Address</label>
                                                        </td>
                                                        <td>
                                                            <input name="StreetAddress1" type="text" class="form-input" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="form-input-lable"></label>
                                                        </td>
                                                        <td>
                                                            <input name="StreetAddress2" type="text" class="form-input">
                                                        </td>
                                                    </tr>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">City</label>
                                                        </td>
                                                        <td>
                                                            <input name="City" type="text" class="form-input" required>
                                                        </td>
                                                    </tr>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">State</label>
                                                        </td>
                                                        <td>
                                                            <select name="State" class="form-input" required>
                                                                <option value="">Select One</option>
                                                                <option value="Alabama"> Alabama</option>
                                                                <option value="Alaska"> Alaska</option>
                                                                <option value="Arizona"> Arizona</option>
                                                                <option value="Arkansas"> Arkansas</option>
                                                                <option value="California"> California</option>
                                                                <option value="Colorado"> Colorado</option>
                                                                <option value="Connecticut"> Connecticut</option>
                                                                <option value="Delaware"> Delaware</option>
                                                                <option value="District of Columbia"> District of Columbia</option>
                                                                <option value="Florida"> Florida</option>
                                                                <option value="Georgia"> Georgia</option>
                                                                <option value="Hawaii"> Hawaii</option>
                                                                <option value="Idaho"> Idaho</option>
                                                                <option value="Illinois"> Illinois</option>
                                                                <option value="Indiana"> Indiana</option>
                                                                <option value="Iowa"> Iowa</option>
                                                                <option value="Kansas"> Kansas</option>
                                                                <option value="Kentucky"> Kentucky</option>
                                                                <option value="Louisiana"> Louisiana</option>
                                                                <option value="Maine"> Maine</option>
                                                                <option value="Maryland"> Maryland</option>
                                                                <option value="Massachusetts"> Massachusetts</option>
                                                                <option value="Michigan"> Michigan</option>
                                                                <option value="Minnesota"> Minnesota</option>
                                                                <option value="Mississippi"> Mississippi</option>
                                                                <option value="Missouri"> Missouri</option>
                                                                <option value="Montana"> Montana</option>
                                                                <option value="Nebraska"> Nebraska</option>
                                                                <option value="Nevada"> Nevada</option>
                                                                <option value="New Hampshire"> New Hampshire</option>
                                                                <option value="New Jersey"> New Jersey</option>
                                                                <option value="New Mexico"> New Mexico</option>
                                                                <option value="New York"> New York</option>
                                                                <option value="North Carolina"> North Carolina</option>
                                                                <option value="North Dakota"> North Dakota</option>
                                                                <option value="Ohio"> Ohio</option>
                                                                <option value="Oklahoma"> Oklahoma</option>
                                                                <option value="Oregon"> Oregon</option>
                                                                <option value="Pennsylvania"> Pennsylvania</option>
                                                                <option value="Puerto Rico"> Puerto Rico</option>
                                                                <option value="Rhode Island"> Rhode Island</option>
                                                                <option value="South Carolina"> South Carolina</option>
                                                                <option value="South Dakota"> South Dakota</option>
                                                                <option value="Tennessee"> Tennessee</option>
                                                                <option value="Texas"> Texas</option>
                                                                <option value="Utah"> Utah</option>
                                                                <option value="Vermont"> Vermont</option>
                                                                <option value="Virginia"> Virginia</option>
                                                                <option value="Washington"> Washington</option>
                                                                <option value="West Virginia"> West Virginia</option>
                                                                <option value="Wisconsin"> Wisconsin</option>
                                                                <option value="Wyoming"> Wyoming</option>
                                                                <option value="------------------------"> ------------------------</option>
                                                                <option value="Alberta"> Alberta</option>
                                                                <option value="British Columbia"> British Columbia</option>
                                                                <option value="Manitoba"> Manitoba</option>
                                                                <option value="New Brunswick"> New Brunswick</option>
                                                                <option value="Newfoundland and Labrador"> Newfoundland and Labrador</option>
                                                                <option value="Northwest Territories"> Northwest Territories</option>
                                                                <option value="Nova Scotia"> Nova Scotia</option>
                                                                <option value="Nunavut"> Nunavut</option>
                                                                <option value="Ontario"> Ontario</option>
                                                                <option value="Prince Edward Island"> Prince Edward Island</option>
                                                                <option value="Quebec"> Quebec</option>
                                                                <option value="Saskatchewan"> Saskatchewan</option>
                                                                <option value="Yukon Territory"> Yukon Territory</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">Zip/Postal Code</label>
                                                        </td>
                                                        <td>
                                                            <input name="Zip" type="text" class="form-input" required>
                                                        </td>
                                                    </tr>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">Primary Phone</label>
                                                        </td>
                                                        <td>
                                                            <input name="PrimaryPhone" type="text" class="form-input input-phone-num" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="form-input-lable">Alternate Phone</label>
                                                        </td>
                                                        <td>
                                                            <input name="AlternatePhone" type="text" class="form-input input-phone-num">
                                                        </td>
                                                    </tr>
                                                    <tr class="required-input">
                                                        <td>
                                                            <label class="form-input-lable">Email</label>
                                                        </td>
                                                        <td>
                                                            <input name="EmailAddress" type="email" class="form-input" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="form-input-lable">Resume</label>
                                                        </td>
                                                        <td>
                                                            <input name="Resume" type="file" class="form-input" accept=".pdf,.doc,.docx">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-btn-container">
                                                <button id="form-btn" type="submit" name="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="region-three">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-body">
                                    <div class="content-text center-text eeo-statement"></div>
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