<?php
include "php/offeror_header.php";
?>
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
<?php
include "php/offeror_sidebar.php";
?>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">My listing</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-container">
                            <div class="row mbl">
                                <div class="col-lg-6">
                                    <div class="input-group input-group-sm mbs"><span class="input-group-btn"><button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Filter
&nbsp;<span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a href="#"><i class="fa fa-tint"></i>&nbsp;
Newest</a>
                                          </li>
                                          <li><a href="#"><i class="fa fa-star"></i>&nbsp;
Rating</a>
                                          </li>
                                          <li><a href="#"><i class="fa fa-money"></i>&nbsp;
Price</a>
                                          </li>
                                          <li><a href="#"><i class="fa fa-user"></i>&nbsp;
Sales</a>
                                          </li>
                                      </ul>
                                      </span>
                                        <input type="text" placeholder="Enter here..." class="form-control" /><span class="input-group-btn"><button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Search</button></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tb-group-actions pull-right"><span>sort by:</span>
                                        <select class="table-group-action-input form-control input-inline input-small input-sm mlm">
                                            <option value="">Select...</option>
                                            <option value="Cancel">ID</option>
                                            <option value="Cancel">Name</option>
                                            <option value="Cancel">Type</option>
                                            <option value="Close">Amount</option>
                                            <option value="Close">Date</option>
                                            <option value="Close">Num of applicants</option>
                                        </select>&nbsp;
                                        <button class="btn btn-sm btn-primary"><i class="fa fa-check"></i>&nbsp; Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet portlet-white">
                                <div class="portlet-header pam mbn">
                                    <div class="actions"><a href="#" class="btn btn-info btn-sm"><i class="fa fa-trash-o"></i>&nbsp;
                                            Delete Selected</a>&nbsp;
                                        <div class="btn-group"><a href="#" data-toggle="dropdown" class="btn btn-warning btn-sm dropdown-toggle"><i class="fa fa-plus"></i>&nbsp;
                                                New ADs</a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="post_job_ad.php"><i class="fa fa-suitcase"></i>&nbsp; &nbsp;Job</a>
                                                </li>
                                                <li><a href="post_course_ad.php"><i class="fa fa-book"></i>&nbsp; &nbsp;Course</a>
                                                </li>
                                                <li><a href="post_accommodation_ad.php"><i class="fa fa-building-o"></i>&nbsp; &nbsp;House</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body pan">
                                    <table class="table table-hover table-striped table-bordered table-advanced tablesorter mbn">
                                        <thead>
                                        <tr>
                                            <th width="3%">
                                                <input type="checkbox" class="checkall" />
                                            </th>
                                            <th width="8%">ID</th>
                                            <th width="12%">Name</th>
                                            <th width="8%">Type</th>
                                            <th width="10%">Amount</th>
                                            <th width="7%">Date Posted</th>
                                            <th width="12%">Number of Applicant</th>
                                            <th width="12%">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        include_once "php/connection.php";
                                        $connection = db_connect();
                                        if (!(isset($_SESSION['uemail']))){
                                            header("Location:index.php");
                                        }
                                        $email = $_SESSION['uemail'];
                                        $UID = $_SESSION['login_user'];
                                        $query = "SELECT * FROM Job WHERE JUID =?";
                                        $stmt = mysqli_prepare($connection,$query);
                                        mysqli_stmt_bind_param($stmt,"s",$UID);
                                        mysqli_stmt_execute($stmt);
                                        $result = mysqli_stmt_get_result($stmt);
                                        if ($result) {
                                            $count = mysqli_num_rows($result);
                                            while ($row = mysqli_fetch_row($result)) {
                                                if (isset($row[2])) {
                                                    echo '<tr>
                                              <td>
                                                  <input type="checkbox" />
                                              </td>
                                              <td>' . $UID . '</td>
                                              <td>' . $row[1] . '</td>
                                              <td>Job</td>
                                              <td>' . $row[3] . '</td>
                                              <td>' . $row[4] . '</td>
                                              <td>*</td>
                                              <td>
                                                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp; Edit
                                                  </button>
                                                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i>&nbsp; Delete
                                                  </button>
                                              </td>
                                          </tr>';
                                                }
                                            }
                                        }
                                        ?>

                                        <tr>
                                            <td>
                                                <input type="checkbox" />
                                            </td>
                                            <td>1000001</td>
                                            <td>Accountant, JT pty ltd</td>
                                            <td>Job</td>
                                            <td>$ 1500</td>
                                            <td>03-09-2017</td>
                                            <td>7</td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp; Edit
                                                </button>
                                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i>&nbsp; Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" />
                                            </td>
                                            <td>1000005</td>
                                            <td>Accountant, JT pty ltd</td>
                                            <td>Job</td>
                                            <td>$ 1500</td>
                                            <td>03-09-2017</td>
                                            <td>7</td>
                                            <td>
                                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp; Edit
                                                </button>
                                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i>&nbsp; Delete
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mbm">
                                <div class="col-lg-6">
                                    <div class="pagination-panel">View &nbsp;
                                        <select class="form-control input-xsmall input-sm input-inline">
                                            <option value="20" selected="selected">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="150">150</option>
                                            <option value="-1">All</option>
                                        </select>&nbsp; records in a page| Found total 58 records</div>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <div class="pagination-panel">
                                        <ul class="pagination pagination-sm man">
                                            <li><a href="#">&laquo;</a>
                                            </li>
                                            <li><a href="#">1</a>
                                            </li>
                                            <li><a href="#">2</a>
                                            </li>
                                            <li><a href="#">3</a>
                                            </li>
                                            <li><a href="#">4</a>
                                            </li>
                                            <li><a href="#">5</a>
                                            </li>
                                            <li><a href="#">&raquo;</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
