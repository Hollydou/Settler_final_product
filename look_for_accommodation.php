
<?php error_reporting(0); ?>
    <?php
    include ("php/session.php");
    include("php/user_header.php");
    $pageTitle = 'look_for_accommodation';
?>

        <div id="page-wrapper">
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Look for Accommodation</div>
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
                                    $sql = "SELECT * FROM Accommodation";
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
                                    }
                                    $page_rows = 5;
                                    $last = ceil($queryResults/$page_rows);
                                    if($last < 1){
                                        $last = 1;
                                    }
                                    $pagenum = 1;
                                    if(isset($_GET['pn'])){
                                        $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
                                    }
                                    if ($pagenum < 1) { 
                                        $pagenum = 1; 
                                    } else if ($pagenum > $last) { 
                                        $pagenum = $last; 
                                    }
                                    $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
                                    
                                    $sql2 = "SELECT * FROM Accommodation $limit";
                                    $result3 = mysqli_query($connection, $sql2);
                                    $textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
                                    $paginationCtrls = '';
                                    if($last != 1){
                                            if ($pagenum > 1) {
                                                $previous = $pagenum - 1;
                                                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'"> « </a> &nbsp; &nbsp; ';
                                                for($i = $pagenum-4; $i < $pagenum; $i++){
                                                    if($i > 0){
                                                        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
                                                    }
                                                }
                                            }
                                            $paginationCtrls .= ''.$pagenum.' &nbsp; ';
                                            for($i = $pagenum+1; $i <= $last; $i++){
                                                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
                                                if($i >= $pagenum+4){
                                                    break;
                                                }
                                            }
                                            if ($pagenum != $last) {
                                                $next = $pagenum + 1;
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
                                    <p><strong><?php echo $queryResults; ?></strong> accommodations found</p>
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
                            <form name="selectForm" action="orderAllAccommodation.php" method="POST">
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
            var posting = $.post("php/accommodation_detail_view.php", {AID: $id});
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