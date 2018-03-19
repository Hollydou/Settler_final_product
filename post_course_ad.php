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
                    <div class="page-title">Post Course Ad</div>
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
                                        Post Accommodation Advertisement
                                    </h3>
                                    <div class = "row">
                                        <div class="panel-body pan">
                                            <form action="php/post_course.php" method="post" enctype="multipart/form-data" class="form-validate">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseTitle" class="control-label">Name of Course <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseTitle" type="text" placeholder="" class="form-control required" name="courseTitle">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseFees" class="control-label">Fees ($) <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseFees" type="text" placeholder="" class="form-control required" name="courseFees">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseCertificate" class="control-label">Certificate Provided <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <select name="courseCertificate" class="form-control input-sm required">
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseLang" class="control-label">Teaching Language <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseLang" type="text" placeholder="" class="form-control required" name="courseLang">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseStartD" class="control-label">Starting Date <span class="require">*</span></label>
                                                                <div class="input-group datetimepicker-disable-time date">
                                                                    <input type="text" name="courseStartD" class="form-control required" id = "courseStartD"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseEndD" class="control-label">End Date <span class="require">*</span></label>
                                                                <div class="input-group datetimepicker-disable-time date">
                                                                    <input type="text" name="courseEndD" class="form-control" id = "courseEndD"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label for="courseLocation" class="control-label">Location <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseLocation" type="text" placeholder="" class="form-control required" name="courseLocation">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="courseSuburb" class="control-label">Suburb <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseSuburb" type="text" placeholder="" class="form-control required" name="courseSuburb">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="coursePostcode" class="control-label">Postcode</label>
                                                                <div class="input-icon right">
                                                                    <input id="coursePostcode" type="text" placeholder="" class="form-control" name="coursePostcode">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="coursePicture" class="control-label">Upload Picture: (optional)</label>
                                                                <div class="input-icon right">
                                                                    <input id="coursePicture" type="file" class="form-control" name="coursePicture">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseLength" class="control-label">Length of Course <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseLength" type="text" placeholder="" class="form-control required" name = "courseLength">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseDay" class="control-label">Day of Course <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseDay" type="text" placeholder="" class="form-control required" name="courseDay">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="courseEmail" class="control-label">Email <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="courseEmail" type="text" placeholder="" class="form-control required email" name = "courseEmail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="coursePhone" class="control-label">Phone <span class="require">*</span></label>
                                                                <div class="input-icon right">
                                                                    <input id="coursePhone" type="text" placeholder="" class="form-control required digits" name="coursePhone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="courseDescription" class="control-label">Description <span class="require">*</span></label>
                                                        <textarea id="courseDescription" rows="5" class="form-control required" name="courseDescription"></textarea>
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
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="vendors/moment/moment.js"></script>
<script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="vendors/jquery-maskedinput/jquery-maskedinput.js"></script>


<script src="vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="js/form-components.js"></script>
<script src="js/form-validation.js"></script>

<script type="text/javascript">
    var height = $('#wrapper').height();
    $('#sidebar').height(height);
</script>




</body>

</html>
