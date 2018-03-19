<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <li class="user-panel">
                <div class="thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/oliveirasimoes/128.jpg" alt="" class="img-circle" />
                </div>
                <div class="info">
                    <?php
                    include_once 'php/connection.php';
                    $connection = db_connect();

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
                        <li><a href="profile_offer.php" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a>
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
                  <li><a href="post_accommodation_ad.php"><i class="fa fa-building-o"></i><span class="submenu-title">Accommodation</span></a>
                  </li>
              </ul>
            </li>
            <li><a href="mylisting.php"><i class="fa fa-file-text-o fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">My listing</span></a>
            </li>
            <li><a href="#" class = "inactive"><i class="fa fa-bell fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Notification</span></a>
            </li>
            <li><a href="view_all_applicant_01.html" class = "inactive"><i class="fa fa-list-ul fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">View All Applicant</span></a>
            </li>
            <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>-->
        </ul>
    </div>
</nav>
