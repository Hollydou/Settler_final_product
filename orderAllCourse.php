<?php error_reporting(0); ?>
<?php
    include ("php/session.php");
    include("php/user_header.php");
    $pageTitle = 'look_for_course_order';
?>
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
                            <form action="searchCourse.php" method="POST" id="searchForm">
                                <input type="text" class="form-control" name="search" id="searchBar3" placeholder="" value="What course are you looking for?" maxlength="25" autocomplete="on" onMouseDown="active3();" onblur="inactive3();" />
                                <br>
                                <div class = "row">
                                    <div class = "col-sm-3 nopadding-right">
                                        <select name="Certificate_Provided" class="form-control input-sm">
                                            <option value="All">Certificate Provided</option>
                                            <option value="Yes">Yes</option> <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class = "col-sm-4 nopadding">
                                        <select name="Teaching_Language" class="form-control input-sm">
                                            <option value="All">English</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="other">Other language</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 nopadding">
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
                                        $option = 'Date DESC';  
                                    } elseif ($selectOption == 'Salary') {
                                        $userSelect = 'Fee (lowest to highest)';
                                        $option = 'Fee ASC';
                                    } elseif ($selectOption == 'Price') {
                                        $userSelect = 'Fee (highest to lowest)';
                                        $option = 'Fee DESC';
                                    }
                                    $sql = "SELECT * FROM Course ORDER BY $option";
                                    $result2 = mysqli_query($connection, $sql);
                                    $queryResults = mysqli_num_rows($result2);
                                    while($row = mysqli_fetch_assoc($result2)) {
                                        $CID = $row['CID'];
                                        $Name = $row['Name'];
                                        $Fee = $row['Fee'];
                                        $Certificate = $row['Certificate'];
                                        $Language = $row['Language'];
                                        $StartDate = $row['StartDate'];
                                        $EndDate = $row['EndDate'];
                                        $Location = $row['Location'];
                                        $Suburb = $row['Suburb'];
                                        $Postcode = $row['Postcode'];
                                        $Length = $row['Length'];
                                        $DayOfCourse = $row['DayOfCourse'];
                                        $Email = $row['Email'];
                                        $Phone = $row['Phone'];
                                        $Description = $row['Description'];
                                        $UID = $row['UID'];
                                        $Date = $row['Date'];
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
                                    
                                    $sql2 = "SELECT * FROM Course ORDER BY $option $limit";
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
                                    <p><strong><?php echo $queryResults; ?></strong> courses found, order by <b><?php echo $userSelect; ?></b> </p>
                                    <?php
                                    if ($queryResults > 0){
                                        while($row = mysqli_fetch_assoc($result3)) {
                                            $CID = $row['CID'];
                                            $Name = $row['Name'];
                                            $Fee = $row['Fee'];
                                            $Certificate = $row['Certificate'];
                                            $Language = $row['Language'];
                                            $StartDate = $row['StartDate'];
                                            $EndDate = $row['EndDate'];
                                            $Location = $row['Location'];
                                            $Suburb = $row['Suburb'];
                                            $Postcode = $row['Postcode'];
                                            $Length = $row['Length'];
                                            $DayOfCourse = $row['DayOfCourse'];
                                            $Email = $row['Email'];
                                            $Phone = $row['Phone'];
                                            $Description = $row['Description'];
                                            $UID = $row['UID'];
                                            $Date = $row['Date'];

                                            echo '<tbody id="'. $CID. '">
                                                            <tr>
                                                                <td class="img"><img src="vendors/jplist/html/img/thumbs/arch-1.jpg" alt="" title=""></td>
                                                                <td class="td-block">
                                                                    <p class="date">'. $Date .'</p>
                                                                    <p class="title">'. $Name .'</p>
                                                                    <p class="desc">AUD$'. $Fee .'</p>
                                                                    <p class="desc">Certificate provide: '. $Certificate .'</p>
                                                                    <p class="desc">Start date: '. $StartDate .'</p>
                                                                    <p class="desc">End date: '. $EndDate .'</p>
                                                                    <p class="desc">Location: '. $Location .', '.$Suburb.', '.$Postcode.'</p>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-info" onClick="document.location.href=\'job_application.php?jid='.$CID.'\'">Apply</button>
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
                            <form name="selectForm" action="orderAllCourse.php" method="POST">
                                <select name="taskOption" class="form-control input-sm">
                                    <option disabled selected value> -- select an option --  </option>
                                    <option value="Newest Post">Newest Post</option>
                                    <option value="Salary">Fee (lowest to highest)</option>
                                    <option value="Price">Fee (highest to lowest)</option>
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
                    <div class="panel-body result"></div>
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
            var posting = $.post("php/course_detail_view.php", {CID: $id});
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