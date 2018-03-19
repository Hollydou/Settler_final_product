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
                    <li class="active"><a href="look_for_job.php" target="_blank"><i class="fa fa-briefcase fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Job</span></a>
                    </li>
                    <li><a href="look_for_course.php" target="_blank"><i class="fa fa-graduation-cap fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Course</span></a>
                    </li>
                    <li><a href="look_for_accommodation.php" target="_blank"><i class="fa fa-home fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Look for Accommodation</span></a>
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
                            <form action="searchJob.php" method="POST" id="searchForm">
                                <input type="text" class="form-control" name="search" id="searchBar" placeholder="" value="What job are you looking for?" maxlength="25" autocomplete="on" onMouseDown="active();" onblur="inactive();" />
                                <br>
                                <div class = "row">
                                    <div class = "col-sm-3 nopadding-right">
                                        <select name="JobType" class="form-control input-sm">
                                            <option value="All">All types</option>  <option value="Full-time">Full time</option>
                                            <option value="Part-time">Part time</option>  <option value="Casual/ Temporary">Casual/ Temporary</option>
                                            <option value="Contract">Contract</option>  <option value="Permanent">Permanent</option>
                                            <option value="Fly in Fly out">Fly in Fly out</option>   <option value="Volunteer">Volunteer</option>
                                            <option value="Apprenticeship">Apprenticeship</option>   <option value="Internship">Internship</option>
                                            <option value="Working holiday">Working holiday</option>   <option value="Freelance">Freelance</option>
                                        </select>
                                    </div>

                                    <div class = "col-sm-2 nopadding">
                                        <select name="SalaryRange" class="form-control input-sm">
                                            <option value="All">All salaries</option>
                                            <option value="1000">1000 +</option> <option value="3000">3000 +</option>
                                            <option value="5000">5000 +</option> <option value="7000">7000 +</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <select name="Location" class="form-control input-sm">
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
                                    <div class = "col-sm-4 nopadding-left">
                                        <select name="Category" class="form-control input-sm">
                                            <option value="All">All categories</option>
                                            <option value="Trades & Services">Trades & Services</option> <option value="Education & Training, Engineering">Education & Training, Engineering</option>
                                            <option value="Construction">Construction</option> <option value="Accounting">Accounting</option>
                                            <option value="Manufacturing">Manufacturing</option> <option value="Community Services & Development">Community Services & Development</option>
                                            <option value="Transport & Logistics">Transport & Logistics</option> <option value="Call Centre & Customer Service">Call Centre & Customer Service</option>
                                            <option value="Information & Communication Technology">Information & Communication Technology</option> <option value="Human Resources & Recruitment">Human Resources & Recruitment</option>
                                            <option value="Healthcare & Medical">Healthcare & Medical</option> <option value="Real Estate & Property">Real Estate & Property</option>
                                            <option value="Sales">Sales</option> <option value="Banking & Financial Services">Banking & Financial Services</option>
                                            <option value="Administration & Office Support">Administration & Office Support</option> <option value="Legal">Legal</option>
                                            <option value="Hospitality & Tourism">Hospitality & Tourism</option> <option value="Marketing & Communications">Marketing & Communications</option>
                                            <option value="Retail & Consumer Products">Retail & Consumer Products</option> <option value="Mining">Mining</option>
                                            <option value="Resources & Energy">Resources & Energy</option>
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
                                        $JobType = $item['JobType'];
                                        $SalaryRange = $item['SalaryRange'];
                                        $Category = $item['Category'];
                                        $Location = $item['Location'];
                                    }
                                    $outputSearch = $search;
                                    $outputJobType = $JobType;
                                    $outputSalaryRange = $SalaryRange;
                                    $outputCategory = $Category;
                                    $outputLocation = $Location;
                                    
                                    $One = "JName LIKE '%$search%'";
                                    $Two = "AND JType LIKE '%$JobType%'";
                                    $Three = "AND Jcategories LIKE '%$Category%'";
                                    $Four = "AND JLocation LIKE '%$Location%' ";
                                    $Five = "AND JSalary >=  $SalaryRange ";
                                    
                                    if ($search == 'What job are you looking for?'){ $One = ''; $outputSearch = 'All jobs';} 
                                    if ($JobType == 'All' ){ $Two = ''; $outputJobType = 'All types';}
                                    if ($SalaryRange == 'All' ){ $Five = ''; $outputSalaryRange = 'All salary range';}
                                    if ($Category == 'All' ){ $Three = ''; $outputCategory = 'All categories';}
                                    if ($Location == 'All' ){ $Four = ''; $outputLocation = 'All locations';}
                                     //echo $search.'+'. $Category .'+'. $JobType .'+'. $SalaryRange.'+'.$Location; 
                                     
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
                                        $option = 'JPostTime';  
                                    } elseif ($selectOption == 'Salary') {
                                        $userSelect = 'Salary (from highest)';
                                        $option = 'JSalary';
                                    }
                                    $sql = "SELECT * FROM Job WHERE $One $Two $Three $Four $Five"
                                            . "ORDER BY $option DESC";
                                            
                                    $result2 = mysqli_query($connection, $sql);
                                    $queryResults = mysqli_num_rows($result2);
                                    while($row = mysqli_fetch_assoc($result2)) {
                                        $JUID = $row['JUID'];
                                        $JID = $row['JID'];
                                        $JName = $row['JName'];
                                        $JLocation = $row['JLocation'];
                                        $JSalary = $row['JSalary'];
                                        $JPostTime = $row['JPostTime'];
                                        $JDescription = $row['JDescription'];
                                        $Jcategories = $row['Jcategories'];
                                        $JLang = $row['JLang'];
                                        $JSkill = $row['JSkill'];
                                        $JType = $row['JType'];
                                        $companyName = $row['companyName'];
                                        $companyEmail = $row['companyEmail'];
                                        $suburb = $row['suburb'];
                                        $postcode = $row['postcode'];
                                        $companyPhone = $row['companyPhone'];
                                        $searchResult[] = array(
                                            //'UID' => $UID,
                                            'JUID' => $row['JUID'],
                                            'JID' => $row['JID'],
                                            'Name' => $row['JName'],
                                            'Location' => $row['JLocation'],
                                            'Salary' => $row['JSalary'],
                                            'PostTime' => $row['JPostTime'],
                                            'Description' => $row['JDescription'],
                                            'Categories' => $row['Jcategories'],
                                            'Lang' => $row['JLang'],
                                            'Skill' => $row['JSkill'],
                                            'Type' => $row['JType'],
                                            'companyName' => $row['companyName'],
                                            'companyEmail' => $row['companyEmail'],
                                            'suburb' => $row['suburb'],
                                            'postcode' => $row['postcode'],
                                            'companyPhone' => $row['companyPhone']
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
                                    $sql2 = "SELECT * FROM Job WHERE $One $Two $Three $Four $Five"
                                            . "ORDER BY $option DESC $limit";
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
                                   <p><strong><?php echo $queryResults; ?></strong> results for ' <?php echo $outputSearch .' | '.$outputJobType .' | '.$outputSalaryRange .'+ | '. $outputCategory .' | '. $outputLocation; ?> ', order by <b><?php echo $userSelect; ?></b></p>
                                    <?php
                                    if ($queryResults > 0){
                                        while($row = mysqli_fetch_assoc($result3)) {
                                            $JUID = $row['JUID'];
                                            $JID = $row['JID'];
                                            $JName = $row['JName'];
                                            $JLocation = $row['JLocation'];
                                            $JSalary = $row['JSalary'];
                                            $JPostTime = $row['JPostTime'];
                                            $JDescription = $row['JDescription'];
                                            $Jcategories = $row['Jcategories'];
                                            $JLang = $row['JLang'];
                                            $JSkill = $row['JSkill'];
                                            $JType = $row['JType'];
                                            $companyName = $row['companyName'];
                                            $companyEmail = $row['companyEmail'];
                                            $suburb = $row['suburb'];
                                            $postcode = $row['postcode'];
                                            $companyPhone = $row['companyPhone'];

                                            echo '<tbody id="'. $JID. '">
                                                            <tr>
                                                                <td class="img"><img src="vendors/jplist/html/img/thumbs/arch-1.jpg" alt="" title=""></td>
                                                                <td class="td-block">
                                                                    <p class="date">'. $JPostTime .'</p>
                                                                    <p class="title">'. $JName .'</p>
                                                                    <p class="desc">Offer by: '. $companyName .'</p>
                                                                    <p class="desc">Salary Estimate: '. $JSalary .'</p>
                                                                    <p class="desc">Located at: '. $JLocation .'</p>
                                                                    <p class="desc">Category: '. $Jcategories .'</p>
                                                                    <p class="desc">Job Type: '. $JType .'</p>
                                                                    
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-info" onClick="document.location.href=\'job_application.php?jid='.$JID.'\'">Apply</button>
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
                            <form name="selectForm" action="orderSearchResult.php" method="POST">
                                <select name="taskOption" class="form-control input-sm">
                                    <option disabled selected value> -- select an option --  </option>
                                    <option value="Newest Post">Newest Post</option>
                                    <option value="Salary">Salary</option>
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