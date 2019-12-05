<!DOCTYPE html>
<html>
    <?php include("../includes/includes.html") ?>
    <head>
        <title>Savings Calculator - NSI Nursing Solutions Inc.</title>
        <link rel="stylesheet" href="/includes/css/savings.css">
        <script type="text/javascript">
            $(document).ready(function() {
                $('#savings-form').savingsCalculator();
            });
        </script>
    </head>
    <body>
        <div id="page">
            <?php include("../includes/header.html"); ?>
            <div id="main-content">
                <div id="banner-img">
                    <img src="/includes/images/banner/savings.jpg">
                </div>
                <div id="region-one" class="texture-bkgd">
                    <div class="container">
                        <div class="row">
                            <div id="content">
                                <div id="content-head">
                                    <h1 class="savings-header">
                                        Contract labor expenses continue to deteriorate  
                                        hospital margins. NSI will work closely with you to build the right 
                                        program to maximize your savings.
                                    </h1>
                                </div>
                                <div id="content-body">
                                    
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
                                    <h1>Savings Calculator</h1>
                                </div>
                                <div id="content-body">
                                    <div class="content-box savings-content-box">
                                        <div class="savings-box-left col-md-6">
                                            <div class="savings-box-info content-text">
                                                <h2 class="savings-box-info-header">The NSI Difference</h2>
                                                <p class="savings-box-info-paragraph">
                                                    For every 30 nurses hired, you can realize between $1.8 - $2.3 million 
                                                    saved. This savings is attributed to replacing costly travel RNs with 
                                                    staff RNs.  Generally, clients can recoup their investment in as little 
                                                    as 22 weeks depending upon: 
                                                </p>
                                                <ul class="savings-box-info-list">
                                                    <li>
                                                        Number of travel RNs to replace
                                                    </li>
                                                    <li>
                                                        Cost of contract labor
                                                    </li>
                                                    <li>
                                                        Current staff RN labor costs
                                                    </li>
                                                </ul>
                                                <p class="savings-box-info-paragraph">
                                                    Then there are the intangible returns: improved patient experience, physician 
                                                    satisfaction, employee engagement, reduced turnover, better quality 
                                                    & patient care outcomes. Contact us for a more detailed analysis.
                                                </p>
                                            </div>
                                            <div class="bottom-positioned">
                                                <div class="link-btn">
                                                    <a href="mailto:macolosi@nsinursingsolutions.com?subject=NSI%20Inquiry">Contact Us</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="savings-box-right col-md-6">
                                            <form id="savings-form" action="" method="POST" autocomplete="off">
                                                <table class="form-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="field-info-container">
                                                                    <div class="info-icon">i</div>
                                                                    <div class="field-info">
                                                                        How many travel nurses would 
                                                                        you like NSI to replace?
                                                                    </div>
                                                                </div>
                                                                <label class="form-input-lable">Number of Nurses Needed:</label>
                                                            </td>
                                                            <td>
                                                                <div class="input-container">
                                                                    <input name="NumberNursesNeeded" type="text" class="form-input">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="field-info-container">
                                                                    <div class="info-icon">i</div>
                                                                    <div class="field-info">
                                                                        Enter the hourly contract rate for travel nurses.
                                                                    </div>
                                                                </div>
                                                                <label class="form-input-lable">Hourly Rate - Contract Labor:</label>
                                                            </td>
                                                            <td>
                                                                <div class="input-container">
                                                                    <input name="ContractLaborRate" type="text" class="form-input">
                                                                    <span class="input-overlay-content">$</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="field-info-container">
                                                                    <div class="info-icon">i</div>
                                                                    <div class="field-info">
                                                                        The average hourly rate of pay for a staff 
                                                                        nurse or the midpoint of the range.
                                                                    </div>
                                                                </div>
                                                                <label class="form-input-lable">Average Hourly Rate - Staff Nurse:</label>
                                                            </td>
                                                            <td>
                                                                <div class="input-container">
                                                                    <input name="StaffNurseRate" type="text" class="form-input">
                                                                    <span class="input-overlay-content">$</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="last-form-element">
                                                            <td>
                                                                <div class="field-info-container">
                                                                    <div class="info-icon">i</div>
                                                                    <div class="field-info">
                                                                        Commonly known as the "benefit load." Is the 
                                                                        added percentage employers pay to cover the 
                                                                        cost of benefits; such as health, retirement, 
                                                                        dental, vacation, etc. This is usually between 
                                                                        25%-35%. 
                                                                    </div>
                                                                </div>
                                                                <label class="form-input-lable">Cost of Benefits (as % of Hourly Rate):</label>
                                                            </td>
                                                            <td>
                                                                <div class="input-container">
                                                                    <input name="COB" type="text" class="form-input" value="28"> %
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="calculated-boxes-line">
                                                            <td>
                                                                <div class="field-info-container">
                                                                    <div class="info-icon">i</div>
                                                                    <div class="field-info">
                                                                        The calculated total rate for staff RNs 
                                                                        taking into consideration the cost of benefits.
                                                                    </div>
                                                                </div>
                                                                <label class="form-input-lable">Adjusted Hourly Rate - Staff RN:</label>
                                                            </td>
                                                            <td>
                                                                <div class="input-container">
                                                                    <input name="AdjustedRate" type="text" class="form-input result" readonly>
                                                                    <span class="input-overlay-content">$</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="field-info-container">
                                                                    <div class="info-icon">i</div>
                                                                    <div class="field-info">
                                                                        Your potential savings in hiring
                                                                        staff RNs vs. travel nurses.
                                                                    </div>
                                                                </div>
                                                                <label class="form-input-lable">Total Savings:</label>
                                                            </td>
                                                            <td>
                                                                <div class="input-container">
                                                                    <input name="FirstSavings" type="text" class="form-input result" readonly>
                                                                    <span class="input-overlay-content">$</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="savings-calc-btn-container">
                                                    <div class="link-btn">
                                                        <a id="reset-btn" name="reset">Reset Fields</a>
                                                    </div>
                                                </div>
                                            </form>
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
            <?php include("../includes/footer.html"); ?>
        </div>
    </body>
</html>