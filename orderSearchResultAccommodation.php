<?php error_reporting(0); ?>
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
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="vendors/jplist/html/css/jplist-custom.css">
    <link type="text/css" rel="stylesheet" href="css/popup.css">
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
                </button><a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">User</span><span style="display: none" class="logo-text-icon">?</span></a>
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
                                if (isset($_SESSION['login_user'])) {
                                        $UID = $_SESSION['login_user'];
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
                    <li><a href="look_for_course.php" target="_blank"><i class="fa fa-graduation-cap fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Course</span></a>
                    </li>
                    <li class="active"><a href="look_for_accommodation.php" target="_blank"><i class="fa fa-home fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Accommodation</span></a>
                    </li>
                    <li><a href="look_for_help.php" target="_blank"><i class="fa fa-life-ring fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Help</span></a>
                    </li>
                    <li><a href="notification-user.php" target="_blank" ><i class="fa fa-bell fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Notification</span></a>
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
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Look for Job</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--START CONTENT-->
            <div class="page-content">
                <div class = "col-lg-9">
                    <div class = "panel">
                        <div class="panel-body">
                            <form action="searchAccommodation.php" method="POST" id="searchForm">
                                <input type="text" class="form-control" name="search" id="searchBar2" placeholder="" value="Where do you want to live?" maxlength="25" autocomplete="on" onMouseDown="active2();" onblur="inactive2();" />
                                <br>
                                <div class = "row">
                                    <div class = "col-sm-3 nopadding-right">
                                        <select name="PropertyType" class="form-control input-sm">
                                            <option value="All">All accommodations</option>  <option value="House">House</option>
                                            <option value="Apartment">Apartment</option>  <option value="Townhouse">Townhouse</option>
                                            <option value="Unit">Unit</option>  <option value="Land">Land</option>
                                            <option value="Rural">Rural</option>   
                                        </select>
                                    </div>

                                    <div class = "col-sm-2 nopadding">
                                        <select name="PriceRange" class="form-control input-sm">
                                            <option value="All">All prices/weekly</option>
                                            <option value="0"> less than 100</option> <option value="100">100 + </option>
                                            <option value="200">200 + </option> <option value="300">300 + </option>
                                            <option value="400">400 + </option>
                                        </select>
                                    </div>
                                    <div class = "col-sm-2 nopadding">
                                        <select name="NumOfP" class="form-control input-sm">
                                            <option value="NoPeople">Number of people</option>
                                            <option value="1"> 1+ guests</option> <option value="2"> 2+ guests</option>
                                            <option value="3"> 3+ guests</option> <option value="3"> 4+ guests</option>
                                        </select>
                                    </div>
                                    <div class = "col-sm-2 nopadding">
                                        <select name="NumOfB" class="form-control input-sm">
                                            <option value="NoBedroom">Number of bedroom</option>
                                            <option value="1"> 1+ bedroom </option> <option value="2"> 2+ bedroom </option>
                                            <option value="3"> 3+ bedroom </option> <option value="3"> 4+ bedroom </option>
                                        </select>
                                    </div>
                                    <div class = "col-sm-3 nopadding-left">
                                        <select name="NumOfC" class="form-control input-sm">
                                            <option value="NoVehicle">Number of vehicle</option>
                                            <option value="0"> 0 car</option> 
                                            <option value="1"> 1+ cars</option> <option value="2"> 2+ cars</option>
                                            <option value="3"> 3+ cars</option> <option value="3"> 4+ cars</option>
                                        </select>
                                    </div>
                                </div>
                                <br>

                                <div class = "row text-center">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary" name="submit-search" id="searchBtn" value="Search">Search <i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class ="panel">
                        <div class = "panel-body">
							<div class="box text-shadow">
                                <table class="table table-hover table-striped">
                                    <!--<item>1</item>-->
                                    <tr>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>

                                <?php
                                    //Get search keywords    
                                    $jsonOut = json_decode(file_get_contents("json/searchKeywords.json"), true);
                                    foreach($jsonOut as $item) {
                                        $search = $item['search'];
                                        $PropertyType = $item['PropertyType'];
                                        $PriceRange = $item['PriceRange'];
                                        $NumOfP = $item['NumOfP'];
                                        $NumOfB = $item['NumOfB'];
                                        $NumOfC = $item['NumOfC'];
                                    }
                                    $outputSearch = $search;
                                    $outputPropertyType = $PropertyType;
                                    $outputPriceRange = $PriceRange;
                                    
                                    $One = "ALocation LIKE '%$search%'";
                                    $Two = "AND RentalperWeek >= $PriceRange";
                                    $Three = "AND NoPeople >= $NumOfP";
                                    $Four = "AND NoBedroom >= $NumOfB ";
                                    $Five = "AND NoCarpark >= $NumOfC ";
                                    $Six = "AND PropertyType LIKE '%$PropertyType%'";
                                    
                                    if ($search == 'Where do you want to live?'){ $One = ''; $outputSearch = 'Anywhere';} 
                                    if ($PropertyType == 'All' ){ $Six  = ''; $outputPropertyType = 'All accommodations';}
                                    if ($PriceRange == null ){ $Two = ''; $outputPriceRange = 'All price range';}
                                    if ($PriceRange == 'All' ){ $Two = ''; $outputPriceRange = 'All price range';}
                                    if ($NumOfP == 'NoPeople' ){ $Three = '';}
                                    if ($NumOfB == 'NoBedroom' ){ $Four = '';}
                                    if ($NumOfC == 'NoVehicle' ){ $Five = '';}
                                    //echo $search .'+'.$PropertyType .'+'.$PriceRange .'+'.$NumOfP .'+'.$NumOfB .'+'.$NumOfC;
                                    
                                    //Get order keywords 
                                    if(isset($_POST['submit-order'])){
                                        $selectOption = $_POST['taskOption'];
                                        // Temporary save keywords to json
                                       $searchOrder[] = array(  'Order' => $selectOption );
                                       $jsonInJson = json_encode($searchOrder); 
                                       file_put_contents('json/orderOption.json', $jsonInJson);    
                                    }
                                    $jsonOutJson = json_decode(file_get_contents("json/orderOption.json"), true);
                                    foreach($jsonOutJson as $item) {
                                        $selectOption = $item['Order'];
                                    }
                                    if ($selectOption == 'Newest Post'){
                                        $userSelect = 'Post date (from newest)';
                                        $option = 'Time DESC';  
                                    } elseif ($selectOption == 'Salary') {
                                        $userSelect = 'Rental price (lowest to highest)';
                                        $option = 'RentalperWeek ASC';
                                    } elseif ($selectOption == 'Price') {
                                        $userSelect = 'Rental price (highest to lowest)';
                                        $option = 'RentalperWeek DESC';
                                    }
                                    //echo "SELECT * FROM Accommodation WHERE $One $Two $Three $Four $Five $Six";
                                    $sql = "SELECT * FROM Accommodation WHERE $One $Two $Three $Four $Five $Six"
                                            . "ORDER BY $option";
                                            
                                    $result2 = mysqli_query($connection, $sql);
                                    $queryResults = mysqli_num_rows($result2);
                                    while($row = mysqli_fetch_assoc($result2)) {
                                        $AID = $row['AID'];
                                        $ALocation = $row['ALocation'];
                                        $ASuburb = $row['ASuburb'];
                                        $APostcode = $row['APostcode'];
                                        $PropertyType = $row['PropertyType'];
                                        $NoPeople = $row['NoPeople'];
                                        $RentalperWeek = $row['RentalperWeek'];
                                        $NoBathroom = $row['NoBathroom'];
                                        $NoBedroom = $row['NoBedroom'];
                                        $NoCarpark = $row['NoCarpark'];
                                        $Email = $row['Email'];
                                        $Phone = $row['Phone'];
                                        $Description = $row['Description'];
                                        $Time = $row['Time'];
                                        $searchResult[] = array(
                                            //'UID' => $UID,
                                            'AID' => $row['AID'],
                                            'ALocation' => $row['ALocation'],
                                            'ASuburb' => $row['ASuburb'],
                                            'APostcode' => $row['APostcode'],
                                            'PropertyType' => $row['PropertyType'],
                                            'NoPeople ' => $row['NoPeople'],
                                            'RentalperWeek' => $row['RentalperWeek'],
                                            'NoBathroom' => $row['NoBathroom'],
                                            'NoBedroom ' => $row['NoBedroom'],
                                            'NoCarpark' => $row['NoCarpark'],
                                            'Email' => $row['Email'],
                                            'Phone' => $row['Phone'],
                                            'Description ' => $row['Description'],
                                            'Time ' => $row['Time']
                                        );
                                        $json_data = json_encode($searchResult);   // Write current search result into a json file
                                        file_put_contents('json/searchResult.json', $json_data);
                                    }
                                    $page_rows = 5;
                                    $lastpage = ceil($queryResults/$page_rows);
                                    if($lastpage < 1){
                                        $lastpage = 1;
                                    }
                                    $pagenumber = 1;
                                    if(isset($_GET['pn'])){
                                        $pagenumber = preg_replace('#[^0-9]#', '', $_GET['pn']);
                                    }
                                    if ($pagenumber < 1) { 
                                        $pagenumber = 1; 
                                    } else if ($pagenumber > $lastpage) { 
                                        $pagenumber = $lastpage; 
                                    }
                                    $limit = 'LIMIT ' .($pagenumber - 1) * $page_rows .',' .$page_rows;
                                    $sql2 = "SELECT * FROM Accommodation WHERE $One $Two $Three $Four $Five $Six"
                                            . "ORDER BY $option $limit";
                                    $result3 = mysqli_query($connection, $sql2);
                                    $textline2 = "Page <b>$pagenumber</b> of <b>$lastpage</b>";
                                    $paginationCtrls = '';
                                    if($lastpage != 1){
                                            if ($pagenumber > 1) {
                                                $previous = $pagenumber - 1;
                                                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'"> « </a> &nbsp; &nbsp; ';
                                                for($i = $pagenumber-4; $i < $pagenumber; $i++){
                                                    if($i > 0){
                                                        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
                                                    }
                                                }
                                            }
                                            $paginationCtrls .= ''.$pagenumber.' &nbsp; ';
                                            for($i = $pagenumber+1; $i <= $lastpage; $i++){
                                                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
                                                if($i >= $pagenumber+4){
                                                    break;
                                                }
                                            }
                                            if ($pagenumber != $lastpage) {
                                                $next = $pagenumber + 1;
                                                $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'"> » </a> ';
                                            }
                                    }
                                    $list = '';
                                ?>
                                    <div class="text-center">
                                            <p><?php echo $textline2; ?></p>
                                            <a href="#"><?php echo $list; ?></a>
                                            <div id="PaginationCtrls"><?php echo $paginationCtrls; ?></div>
                                            <style>
                                                div#PaginationCtrls { color: red; }
                                                div#PaginationCtrls > a:visited { color: rgb(119, 119, 119); }
                                            </style>
                                    </div>
                                   <p><strong><?php echo $queryResults; ?></strong> results for ' <?php echo $outputSearch .' | '.$outputPropertyType .' | '.$outputPriceRange; ?> ', order by <b><?php echo $userSelect; ?></b> </p>
                                    <?php
                                    if ($queryResults > 0){
                                        while($row = mysqli_fetch_assoc($result3)) {
                                        $AID = $row['AID'];
                                        $ALocation = $row['ALocation'];
                                        $ASuburb = $row['ASuburb'];
                                        $APostcode = $row['APostcode'];
                                        $PropertyType = $row['PropertyType'];
                                        $NoPeople = $row['NoPeople'];
                                        $RentalperWeek = $row['RentalperWeek'];
                                        $NoBathroom = $row['NoBathroom'];
                                        $NoBedroom = $row['NoBedroom'];
                                        $NoCarpark = $row['NoCarpark'];
                                        $Email = $row['Email'];
                                        $Phone = $row['Phone'];
                                        $Description = $row['Description'];
                                        $Time = $row['Time'];

                                            echo '<tbody id="'. $AID. '">
                                                            <tr>
                                                                <td class="img"><img src="vendors/jplist/html/img/thumbs/arch-1.jpg" alt="" title=""></td>
                                                                <td class="td-block">
                                                                    <p class="date">'. $Time .'</p>
                                                                    <p class="title">AUD$'. $RentalperWeek .'/week</p>
                                                                    <p class="desc">Location: '. $ALocation .'</p>  
                                                                    <p class="desc">Property type: '. $PropertyType .'</p>
                                                                    <p class="desc"><i class="fa fa-users" aria-hidden="true"></i>    Number of people: '. $NoPeople .'</p>
                                                                    <p class="desc"><i class="fa fa-bed" aria-hidden="true"></i>    Number of bedroom: '. $NoBedroom .'</p>
                                                                    <p class="desc"><i class="fa fa-bath" aria-hidden="true"></i>    Number of bathroom: '. $NoBathroom .'</p>
                                                                    
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-info" onClick="document.location.href=\'job_application.php?jid='.$AID.'\'">Apply</button>
                                                                    <button type="button" class="btn btn-success viewbtn">View</button>
                                                                </td>
                                                            </tr>	
							</tbody>';
                                        }

                                    } else { echo "No results founds"; }
                                    ?>
                                </table>
                            </div>
                            <br><br>

                            <br><br>
                            <div class="text-center">
                                <p><?php echo $textline2; ?></p>
                                <a href="#"><?php echo $list; ?></a>
                                <div id="PaginationCtrls"><?php echo $paginationCtrls; ?></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class = "col-lg-3">
                    <div class = "panel">
                        <div class="panel-body">
                            <p>Order by: </p>
                            <form name="selectForm" action="orderSearchResultAccommodation.php" method="POST">
                                <select name="taskOption" class="form-control input-sm">
                                    <option disabled selected value> -- select an option --  </option>
                                    <option value="Newest Post">Newest Post</option>
                                    <option value="Salary">Price(lowest to highest)</option>
                                    <option value="Price">Price(highest to lowest)</option>
                                </select>
                                <br>
                                <div  style="text-align:center;" class="input-group-btn">
                                    <button type="submit" class="btn btn-primary" name="submit-order" id="searchBtn" value="Go">Go</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div id="myModal" class="modal">
                <div class="modal-content"><span class="close">&times;</span>
                        <div class="panel-body result">


                        </div>
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 text-center">
                                <button type="submit" class="btn btn-info btn-block" onClick="document.location.href=\'job_application.php?jid='.$JID.'\'">Apply</button>
                            </div>
                        </div>
                    </div>
            </div>


            <!--END CONTENT-->
        </div>

        <!--END PAGE WRAPPER-->
    </div>
</div>
<script type="text/javascript">
    function submitform()
    {
        document.selectForm.submit();
    }
</script>
<script type="text/javascript" src="js/search_bar.js"></script>
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
<script src="vendors/calendar/zabuto_calendar.min.js"></script>
<script src="vendors/sco.message/sco.message.js"></script>
<script src="vendors/intro.js/intro.js"></script>

<!-- script popup Window and modal-->
<script>
    $(document).ready(function () {
        $(".viewbtn").click(function () {
            $id = $(this).closest("tbody").prop("id");
            console.log($id);
            var posting = $.post("php/job_detail_view.php", {JID: $id});
            posting.done(function (data) {
                $(".result").html(data);
            });
            $("#myModal").css("display", "block");

        });
        $(".close").click(function () {
            $("#myModal").css("display", "none");
            $(".result").empty();
        })
        $("#myModal").click(function (event) {
            $(this).css("display", "none");
            $(".result").empty();

        });
        var height = $('#wrapper').height();
        var table_height = $('.table').height();
        console.log(table_height);
        $('#sidebar').height(height+table_height);

    });
</script>

</body>

</html>