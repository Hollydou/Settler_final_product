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
                    <div class="page-title">Post Accommodation Ad</div>
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
                                    <br>
                                    <form action="php/post_accom.php" method="post" enctype="multipart/form-data" class="form-validate">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="houseLocation" class="control-label">Location <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseLocation" type="text" placeholder="" class="form-control required" name="houseLocation">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="houseSuburb" class="control-label">Suburb <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseSuburb" type="text" placeholder="" class="form-control required" name="houseSuburb">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="houseType" class="control-label">Property Type <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseType" type="text" placeholder="" class="form-control required" name="houseType">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="housePeopleNum" class="control-label">Number of People Staying <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="housePeopleNum" type="text" placeholder="" class="form-control required number" name="housePeopleNum">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="houseRent" class="control-label">Rental per Week <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseRent" type="text" placeholder="" class="form-control required number" name="houseRent">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="housePostcode" class="control-label">Postcode <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="housePostcode" type="text" placeholder="" class="form-control required digits" name="housePostcode">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="housePicture" class="control-label">Upload Picture: (optional)</label>
                                                        <div class="input-icon right">
                                                            <input id="housePicture" type="file" class="form-control" name="housePicture">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="houseBedroomNum" class="control-label">Number of Bedrooms <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseBedroomNum" type="text" placeholder="" class="form-control required number" name="houseBedroomNum">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="houseBathNum" class="control-label">Number of Bathrooms <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseBathNum" type="text" placeholder="" class="form-control required number" name="houseBathNum">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="houseCarPark" class="control-label">Number of Car Parks <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseCarPark" type="text" class="form-control required number" name="houseCarPark">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="houseEmail" class="control-label">Email <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="houseEmail" type="text" placeholder="" class="form-control required email" name = "houseEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="housePhone" class="control-label">Phone <span class="require">*</span></label>
                                                        <div class="input-icon right">
                                                            <input id="housePhone" type="text" placeholder="" class="form-control required digits" name="housePhone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="houseDescription" class="control-label">Description <span class="require">*</span></label>
                                                <textarea id="houseDescription" rows="5" class="form-control required" name="houseDescription"></textarea>
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
    $('#sidebar').height(height);
</script>




</body>

</html>
