<?php
/**
 * Created by PhpStorm.
 * User: jane
 * Date: 04/10/2017
 * Time: 10:52 PM
 */
//include ("session.php");
$activePage = basename($_SERVER['SCRIPT_FILENAME'],'.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Dashboard</title>
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
    <link type="text/css" rel="stylesheet" href="vendors/jplist/html/css/jplist-custom.css">
    <link type="text/css" rel="stylesheet" href="css/popup.css">
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
                            //echo 'connection.php called';
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
                                <li><a href="profile.php" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a>
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
                    <li <?php echo ($activePage == 'dashboard-user' ? 'class = "active"' : '');?>><a href="dashboard-user.php" target="_self"><i class="fa fa-tachometer fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Dashboard</span></a>
                    </li>
                    <li <?php $plist = array('look_for_job','job_application','orderAllJob','searchJob');
                    echo ( in_array($activePage, $plist) ? 'class = "active"' : '');?>><a href="look_for_job.php" target="_self"><i class="fa fa-briefcase fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Job</span></a>
                    </li>
                    <li <?php $plist2 = array('look_for_course','orderAllCourse','searchCourse');
                    echo (in_array($activePage, $plist2) ? 'class = "active"' : '');?>><a href="look_for_course.php" target="_self"><i class="fa fa-graduation-cap fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Course</span></a>
                    </li>
                    <li <?php $plist1 = array('look_for_accommodation','orderAllAccommodation','searchAccommodation');
                    echo (in_array($activePage, $plist1)? 'class = "active"' : '');?>><a href="look_for_accommodation.php" target="_self"><i class="fa fa-home fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Accommodation</span></a>
                    </li>
                    <li <?php echo ($activePage == 'look_for_help' ? 'class = "active"' : '');?>><a href="look_for_help.php" target="_self"><i class="fa fa-life-ring fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Help</span></a>
                    </li>
                    <li <?php echo ($activePage == 'notification-user' ? 'class = "active"' : '');?>><a href="notification-user.php" target="_self"><i class="fa fa-bell fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Notification</span></a>
                    </li>
                    <li <?php echo ($activePage == 'my_application' ? 'class = "active"' : '');?>><a href="my_application.php" target="_self"><i class="fa fa-list-ul fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">My Application</span></a>
                    </li>
                    <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>-->
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
