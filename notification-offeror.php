<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post Accommodation Ad | Post Accommodation Ad</title>
    <!--Template is from Madmin.swlabs.co. (2017). mAdmin | Angular. [online] Available at: http://madmin.swlabs.co/ [Accessed 9 Sep. 2017].-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-colorpicker/css/colorpicker.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-datepicker/css/datepicker.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-clockface/css/clockface.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/themes/style1/pink-violet.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="css/themes/style1/pink-violet.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
</head>
<?php
include "php/session.php";
?>
<body class=" ">
<div>
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button><a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Offeror</span><span style="display: none" class="logo-text-icon">µ</span></a>
            </div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav    ">
                    <li class="active"><a href="index.html">Dashboard</a>
                    </li>
                </ul>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="inactive fa fa-bell fa-fw"></i></a>
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="inactive fa fa-envelope fa-fw"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--END MODAL CONFIG PORTLET-->
    </div>
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/oliveirasimoes/128.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="info">
                            <?php
                            include_once 'php/connection.php';
                            $UID = $_SESSION['login_user'];
                            if (isset($_SESSION['login_user'])) {
                                $query = "SELECT * FROM User WHERE UID = ?";
                                $stmt = mysqli_prepare($connection, $query);
                                mysqli_stmt_bind_param($stmt, "s", $UID);
                                mysqli_stmt_execute($stmt);
                                $result = mysqli_stmt_get_result($stmt);
                                $row = mysqli_fetch_row($result);
                                $fname = $row[3];
                                $lname = $row[4];
                                echo "<p>" . $fname . " " . $lname . "</p>";
                            }
                            ?>
                            <ul class="list-inline list-unstyled">
                                <li><a href="#" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a>
                                </li>
                                <li><a href="#" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a>
                                </li>
                                <li><a href="#" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="active"><a href="dashboard-offeror.php"><i class="fa fa-tachometer fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Dashboard</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-edit fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Post AD</span></span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="post_job_ad.php"><i class="fa fa-suitcase"></i><span class="submenu-title">Job</span></a>
                            </li>
                            <li><a href="post_course_ad.php"><i class="fa fa-book"></i><span class="submenu-title">Course</span></a>
                            </li>
                            <li><a href="post_accommodation_ad.php" class = "inactive"><i class="fa fa-building-o"></i><span class="submenu-title">House</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="mylisting.php"><i class="fa fa-file-text-o fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">My listing</span></a>
                    </li>
                    <li><a href="#" class="inactive"><i class="fa fa-bell fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Notification</span></a>
                    </li>
                    <li><a href="#" class="inactive"><i class="fa fa-list-ul fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">View All Applicant</span></a>
                    </li>
                    <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>-->
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
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