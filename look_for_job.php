<?php error_reporting(0); ?>
<?php
    include ("php/session.php");
    include("php/user_header.php");
    $pageTitle = 'look_for_job';
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
                                    $sql = "SELECT * FROM Job";
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
                                    
                                    $sql2 = "SELECT * FROM Job $limit";
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
                                    <p><strong><?php echo $queryResults; ?></strong> jobs found</p>
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
                            <form name="selectForm" action="orderAllJob.php" method="POST">
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
        });
        /*$(".result").click(function (event) {
            $("#myModal").css("display", "none");
            $(".result").empty();*/
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