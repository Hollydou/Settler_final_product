<?php
    include ("php/session.php");
    include("php/user_header.php");
    $pageTitle = 'notification-user';
?>
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">NOTIFICATION</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                	<?php
                		include("php/fetch_notification.php");
                	?>
					
					
					<!-- 
                    <div class = "panel notification">
                        <div class = "panel-body">
                           <div class = "row">
                               <div class = "col-sm-12 col-md-12">
                                   <div class="title"><h3>This is a title</h3></div>
                                   <hr>
                                   <div class="noti-content">This is a description</div>
                               </div>
                               <div class = "col-sm-12 col-md-12 text-right">
                                   <input type="submit" class="btn btn-info" value ="View"/>
                               </div>
                           </div>
                        </div>
                    </div>
                    -->

                    

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
    <script src="js/index.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var height = $('#wrapper').height();
            $('#sidebar').height(height);
        })
    </script>
</body>

</html>