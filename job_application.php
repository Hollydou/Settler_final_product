<?php
//include ("php/session.php");
include("php/user_header.php");
$pageTitle = 'job_application';
?>
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">APPLY FOR JOB</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!--BEGIN CONTENT-->
            <div class="page-content">
                <div id="tab-general">
                    <div id="row-mbl">
                        <div class="col-lg-14">
                            <div class="panel">
                                <div class = "panel-body">
                                    <h3 class="caption">
                                        Apply for Job -- Job Name
                                    </h3>
                                    <br>
                                    <hr>
                                    <h4>
                                        Basic Information
                                    </h4>
                                    <div class = "row">
                                        <div class="panel-body pan">
                                            <?php
                                            // used to pass jid variable to apply_for_job.php
                                            if (isset($_GET['jid'])) {
                                                $Jid = $_GET['jid'];
                                                echo "<form action=php/apply_for_job.php?jid=$Jid method='post' enctype='multipart/form-data' class='form-validate'>";

                                            }
                                                ?>

                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantTitle" class="control-label">Title <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <select name="applicantTitle" class="form-control input-sm required">
                                                                        <option value="Miss">Miss</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        <option value="Ms">Ms</option>
                                                                        <option value="Mr">Mr</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantGender" class="control-label">Gender <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <select name="applicantGender" class="form-control input-sm required">
                                                                        <option value="Female">Female</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Other">Other</option>
                                                                        <option value="PreferNot">Prefer Not to Say</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantFirstName" class="control-label">First Name <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantFirstName" type="text" placeholder="" class="form-control required" name="applicantFirstName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantLastName" class="control-label">Last Name <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantLastName" type="text" placeholder="" class="form-control required" name="applicantLastName">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantNumber" class="control-label">Phone Number <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantNumber" type="text" placeholder="" class="form-control required" name="applicantNumber">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantSuburb" class="control-label">I live in</label>

                                                                <div class="input-icon right">
                                                                    <select name="applicantSuburb" class="form-control input-sm">
                                                                        <option value="All">All locations</option>
                                                                        <option value="Ipswich">Ipswich QLD</option>  <option value="South Brisbane">South Brisbane QLD</option>
                                                                        <option value="Fortitude Valley">Fortitude Valley QLD</option>  <option value="Eagle Farm">Eagle Farm QLD</option>
                                                                        <option value="Yatala">Yatala QLD</option>  <option value="Milton">Milton QLD</option>
                                                                        <option value="Wacol">Wacol QLD</option>  <option value="Caboolture">Caboolture QLD</option>
                                                                        <option value="Rocklea">Rocklea QLD</option>  <option value="Acacia Ridge">Acacia Ridge QLD</option>
                                                                        <option value="Chermside">Chermside QLD</option>  <option value="Newstead">Newstead QLD</option>
                                                                        <option value="Murarrie">Murarrie QLD</option>  <option value="Woolloongabba">Woolloongabba QLD</option>
                                                                        <option value="Brendale">Brendale QLD</option>  <option value="East Brisbane">East Brisbane QLD</option>
                                                                        <option value="Mount Gravatt">Mount Gravatt QLD</option>  <option value="Carindale">Carindale QLD</option>
                                                                        <option value="CBD">CBD</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <h4>
                                                        Background & Experience
                                                    </h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="ethnicGroup" class="control-label">I am a</label>
                                                                <div class="input-icon right">
                                                                    <input id="ethnicGroup" type="text" placeholder="Australian, Islander, or etc" class="form-control" name="ethnicGroup">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantLanguage" class="control-label">Language <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantLanguage" type="text" placeholder="English, Spanish, Chinese or etc" class="form-control required" name="applicantLanguage">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantExperience" class="control-label">Work Experience <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantExperience" type="text" placeholder="" class="form-control required" name="applicantExperience">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantExEmployer" class="control-label">My last employer was <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantMajor" type="text" placeholder="The name of the company you worked for" class="form-control required" name="applicantMajor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantEducation" class="control-label">Highest Education <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantEducation" type="text" placeholder="Your degree or qualifications" class="form-control required" name="applicantEducation">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantMajor" class="control-label">Major <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantMajor" type="text" placeholder="Subjects you have learned for the degree" class="form-control required" name="applicantMajor">
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <br>

                                                    <hr>
                                                    <h4>
                                                        Other Information
                                                    </h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantCommunity" class="control-label">Community</label>
                                                                <div class="input-icon right">
                                                                    <input id="applicantCommunity" type="text" placeholder="The name of any local communities or groups you have joined" class="form-control" name = "applicantCommunity">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="applicantInterests" class="control-label">I like</label>
                                                                <div class="input-icon right">
                                                                    <input id="jobLanguage" type="text" placeholder="Sports, Reading, and etc" class="form-control" name="jobLanguage">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="applicationIntro" class="control-label">Self-Introduction <span class="require">*</span></label>
                                                        <textarea id="jobDescription" rows="5" class="form-control required" name="jobDescription" placeholder="Write about why you want to apply for the job"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">Apply</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT-->
        </div>
        <!--END PAGE WRAPPER-->
    </div>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="vendors/iCheck/icheck.min.js"></script>
<script src="vendors/iCheck/custom.min.js"></script>
<script src="vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="vendors/jquery-highcharts/highcharts.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/holder/holder.js"></script>
<script src="vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
<script src="vendors/moment/moment.js"></script>
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--CORE JAVASCRIPT-->
<script src="js/main.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="js/form-validation.js"></script>

<script type="text/javascript">
    var height = $('#wrapper').height();
    $('#sidebar').height(height)​;
</script>
</body>

</html>
