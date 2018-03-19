<!--<?php
include ("php/session.php");
?>-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course Information | Course Information</title>
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
    <link type="text/css" rel="stylesheet" href="vendors/intro.js/introjs.css">
    <link type="text/css" rel="stylesheet" href="vendors/calendar/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/sco.message/sco.message.css">
    <link type="text/css" rel="stylesheet" href="vendors/intro.js/introjs.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/themes/style1/orange-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="css/themes/style1/orange-blue.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
</head>

<body class=" ">
<div>
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button><a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">User</span><span style="display: none" class="logo-text-icon">µ</span></a>
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

    </div>
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" alt="" class="img-circle" />
                        </div>
                        <div class="info">
                            <?php

                            include_once 'php/connection.php';
                            $connection=db_connect();
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
                                <li><a href="profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a>
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
                    <li><a href="dashboard-user.php"><i class="fa fa-tachometer fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Dashboard</span></a>
                    </li>
                    <li><a href="look_for_job.php" target="_blank"><i class="fa fa-briefcase fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Job</span></a>
                    </li>
                    <li><a href="#" target="_blank" class = "inactive"><i class="fa fa-graduation-cap fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Course</span></a>
                    </li>
                    <li ><a href="#" target="_blank" class = "inactive"><i class="fa fa-home fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Accommodation</span></a>
                    </li>
                    <li><a href="#" target="_blank"><i class="fa fa-bell fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Notification</span></a>
                    </li>
                    <li><a href="my_application.php" target="_blank"><i class="fa fa-list-ul fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">My Application</span></a>
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
                    <div class="page-title">COURSE INFORMATION</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!--BEGIN CONTENT-->
            <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>English for Retail </h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h4>Starting Date</h4>
                                                    <p>01-07-2017</p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h4>Length of Course</h4>
                                                    <p>6 Months</p>
                                                </div>
                                            </div>
                                            <hr/>
                                            <h4>Day of Course</h4>
                                            <p>Come along Tuesday and Wed afternoon</p>
                                            <hr/>
                                            <h4>Teaching Language</h4>
                                            <p>English</p>
                                            <hr/>
                                            <h4>Certificate Provided</h4>
                                            <p>Yes</p>
                                            <hr/>
                                            <h4>Fees</h4>
                                            <p>A$500</p>
                                            <hr/>
                                            <h4>Description</h4>
                                            <p>This is a two week course covering everything</p>
                                            <hr/>

                                        </div>
                                        <div class = "col-lg-6">
                                            <img src="images/gallery/1.jpg" alt class="img-responsive"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Contact</h4><address><strong>Loop, Inc.</strong><br/>7275 Crescent Canyon St<br/><abbr title="Phone">P: &nbsp;</abbr>(573)-119-1911</address><address class="mbxl"><strong>Email</strong><br/><a href="mailto:#">example@email.com</a></address>
                                            <ul class="social-icons list-unstyled list-inline">
                                                <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook">&nbsp;</i></a>
                                                </li>
                                                <li><a href="#" data-hover="tooltip" data-original-title="github" class="github"><i class="fa fa-github"></i></a>
                                                </li>
                                                <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" data-hover="tooltip" data-original-title="linkedin" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li><a href="#" data-hover="tooltip" data-original-title="rss" class="rss"><i class="fa fa-rss"></i></a>
                                                </li>
                                                <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a>
                                                </li>
                                                <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a href="#" data-hover="tooltip" data-original-title="youtube" class="youtube"><i class="fa fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-10 col-lg-offset-1 text-center">
                                            <button type="submit" class="btn btn-info btn-block">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
            </div>

            <!--END FOOTER-->
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
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="vendors/gmaps/gmaps.js"></script>
    <script src="js/page-contact.js"></script>

</body>

</html>