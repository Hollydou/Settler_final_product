<?php
include "php/offeror_header.php";
?>
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
<?php
include "php/offeror_sidebar.php";
?>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Post Job Ad</div>
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
                                        Post Job Advertisement
                                    </h3>
                                    <div class = "row">
                                        <div class="panel-body pan">
                                            <form action="php/post_ad.php" method="post" enctype="multipart/form-data" class="form-validate">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="jobTitle" class="control-label">Job Title <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobTitle" type="text" placeholder="" class="form-control" name="jobtitle">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="companyName" class="control-label">Company Name <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="companyName" type="text" placeholder="" class="form-control" name="companyName">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="jobCategory" class="control-label">Category <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobCategory" type="text" placeholder="" class="form-control required" name="jobCategory">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="companyEmail" class="control-label">Company E-mail <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="companyEmail" type="text" placeholder="" class="form-control required email" name="companyEmail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="jobKeyword" class="control-label">Job Keyword <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobKeyword" type="text" placeholder="" class="form-control required" name="jobKeyword">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="jobSalary" class="control-label">Salary ($) <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobSalary" type="text" placeholder="" class="form-control required" name="salary">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label for="jobLocation" class="control-label">Job Location <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobLocation" type="text" placeholder="" class="form-control required" name="jobLocation">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="jobSuburb" class="control-label">Suburb <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobSuburb" type="text" placeholder="" class="form-control required" name="jobSuburb">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="jobPostcode" class="control-label">Postcode <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobPostcode" type="text" placeholder="" class="form-control required digits" name="jobPostcode">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="jobPicture" class="control-label">Upload Picture: (optional)</label>
                                                                <div class="input-icon right">
                                                                    <input id="jobPicture" type="file" class="form-control" name="Picture">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="jobSkills" class="control-label">Required Skills <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobSkills" type="text" placeholder="" class="form-control required" name = "jobSkills">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="jobLanguage" class="control-label">Preferred Language <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="jobLanguage" type="text" placeholder="" class="form-control required" name="jobLanguage">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jobDescription" class="control-label">Job Description <span class="require">*</span></label>
                                                        <textarea id="jobDescription" rows="5" class="form-control required" name="jobDescription"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions text-right pal">
                                                    <button type="submit" class="btn btn-primary">Post Ad</button>
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
<script src="vendors/intro.js/intro.js"></script>
<script src="vendors/flot-chart/jquery.flot.js"></script>
<script src="vendors/flot-chart/jquery.flot.categories.js"></script>
<script src="vendors/flot-chart/jquery.flot.pie.js"></script>
<script src="vendors/flot-chart/jquery.flot.tooltip.js"></script>
<script src="vendors/flot-chart/jquery.flot.resize.js"></script>
<script src="vendors/flot-chart/jquery.flot.fillbetween.js"></script>
<script src="vendors/flot-chart/jquery.flot.stack.js"></script>
<script src="vendors/flot-chart/jquery.flot.spline.js"></script>
<script src="vendors/calendar/zabuto_calendar.min.js"></script>
<script src="vendors/sco.message/sco.message.js"></script>
<script src="vendors/intro.js/intro.js"></script>

<script src="vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="js/form-validation.js"></script>

<script type="text/javascript">
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145464-14', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>
