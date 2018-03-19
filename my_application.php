<?php
    include ("php/session.php");
    include("php/user_header.php");
    $pageTitle = 'my_application';
?>
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">APPLICATION</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div class = "panel">
                        <div class = "panel-body">
                            <table class="table table-hover table-striped table-bordered table-advanced tablesorter mbn">
                                <thead>
                                <tr>
                                    <th width="8%">Num</th>
                                    <th width="12%">Name</th>
                                    <th width="8%">Type</th>
                                    <th width="10%">Amount</th>
                                    <th width="7%">Date Applied</th>
                                    <th width="12%">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php include('php/fetch_application.php');?>
                                </tbody>
                            </table>
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
    <script src="vendors/jquery-pace/pace.min.js"></script>
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
    <script src="js/index.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var height = $('#wrapper').height();
            $('#sidebar').height(height);
        })
    </script>
</body>

</html>