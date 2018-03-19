<?php
include "php/offeror_header.php";
?>
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
<?php
include "php/offeror_sidebar.php";
?>
        <!--END SIDEBAR MENU-->
        <!--BEGIN CHAT FORM-->
        <div id="chat-form" class="fixed">
            <div class="chat-inner">
                <h2 class="chat-header"><a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove"></i></a><i class="fa fa-user"></i>&nbsp;
                    Chat
                    &nbsp;<span class="badge badge-info">3</span></h2>
                <div id="group-1" class="chat-group"><strong>Favorites</strong><a href="#"><span class="user-status is-online"></span><small>Verna Morton</small><span class="badge badge-info">2</span></a><a href="#"><span class="user-status is-online"></span><small>Delores Blake</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-busy"></span><small>Nathaniel Morris</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span><small>Boyd Bridges</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span><small>Meredith Houston</small><span class="badge badge-info is-hidden">0</span></a>
                </div>
                <div id="group-2" class="chat-group"><strong>Office</strong><a href="#"><span class="user-status is-busy"></span><small>Ann Scott</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span><small>Sherman Stokes</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span><small>Florence Pierce</small><span class="badge badge-info">1</span></a>
                </div>
                <div id="group-3" class="chat-group"><strong>Friends</strong><a href="#"><span class="user-status is-online"></span><small>Willard Mckenzie</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-busy"></span><small>Jenny Frazier</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span><small>Chris Stewart</small><span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span><small>Olivia Green</small><span class="badge badge-info is-hidden">0</span></a>
                </div>
            </div>
            <div id="chat-box" style="top:400px">
                <div class="chat-box-header"><a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove"></i></a><span class="user-status is-online"></span><span class="display-name">Willard Mckenzie</span><small>Online</small>
                </div>
                <div class="chat-content">
                    <ul class="chat-box-body">
                        <li>
                            <p><img src="https://s3.amazonaws.com/uifaces/faces/twitter/oliveirasimoes/128.jpg" class="avt" /><span class="user">John Doe</span><span class="time">09:33</span>
                            </p>
                            <p>Hi Swlabs, we have some comments for you.</p>
                        </li>
                        <li class="odd">
                            <p><img src="https://s3.amazonaws.com/uifaces/faces/twitter/alagoon/48.jpg" class="avt" /><span class="user">Swlabs</span><span class="time">09:33</span>
                            </p>
                            <p>Hi, we're listening you...</p>
                        </li>
                    </ul>
                </div>
                <div class="chat-textarea">
                    <input placeholder="Type your message" class="form-control" />
                </div>
            </div>
        </div>
        <!--END CHAT FORM-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Offeror Profile</div>
                </div>
                <ol class="breadcrumb page-breadcrumb">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <!--<li><a href="#">Extras</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>-->
                    <li class="active">Offeror Profile</li>
                </ol>
                <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                    <input type="hidden" name="datestart" />
                    <input type="hidden" name="endstart" />
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!--BEGIN CONTENT-->
            <div class="page-content">
                <div id="page-user-profile" class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="text-center mbl"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);" class="img-circle" />
                                    </div>
                                </div>
                                <?php
                                $gender = $row[18];
                                $DOB = $row[5];
                                $Mstatus = $row[17];
                                $Cjob = $row[10];
                                $Nationality = $row[9];
                                $About = $row[16];
                                $UMail = $row[0];
                                $UAdress = $row[6];
                                $Upostcode = $row[19];
                                $Uphone = $row[8];


                                ?>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <td width="50%">User Name</td>
                                        <td><?php echo $fname;?> <?php echo $lname;?></td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Email</td>
                                        <td><?php echo $UMail;?></td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Address</td>
                                        <td><?php echo $UAdress;?></td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Status</td>
                                        <td><span class="label label-success">Active</span>
                                        </td>
                                    </tr>
                                    <!--<tr>
                                        <td width="50%">Rating</td>
                                        <td><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i>
                                        </td>
                                    </tr>-->
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <ul class="nav nav-tabs ul-edit responsive">
                                    <li class="active"><a href="#tab-activity" data-toggle="tab"><i class="fa fa-bolt"></i>&nbsp;
                                        Profile Setting</a>
                                    </li>
                                    
                                    
                                    <!--<li><a href="#tab-edit" data-toggle="tab"><i class="fa fa-edit"></i>&nbsp;
                                        Account Setting</a>
                                    </li>-->
                                    
                                    
                                    <li><a href="#tab-messages" data-toggle="tab"><i class="fa fa-envelope-o"></i>&nbsp;
                                        Contact Setting</a>
                                    </li>
                                </ul>
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-activity" class="tab-pane fade in active">
                                        <form action="php/profile_save.php" method="post" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">First Name</label>
                                                <div class="col-sm-9 controls">
                                                    <input type="text" placeholder="<?php echo $fname;?>" name="Fname" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Last Name</label>
                                                <div class="col-sm-9 controls">
                                                    <input type="text" placeholder="<?php echo $lname;?>" name="Lname" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Gender</label>
                                                <div class="col-sm-9 controls">
													<div class="row">
                                                        <div class="col-xs-6">
                                                            <select class="form-control" name="Gender" >
                                                                <option><?php echo $gender;?> (Your selection)</option>
                                                                <option>Female</option>
                                                                <option>Male</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Birthday</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <input type="text" data-date-format="yyyy-mm-dd" placeholder="<?php echo $DOB;?>" name="DOB" class="datepicker-normal form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Marital Status</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <select class="form-control" name="Mstatus" >
                                                                <option><?php echo $Mstatus;?> (Your selection)</option>
                                                                <option>Single</option>
                                                                <option>Married</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Current Job</label>
                                                <div class="col-xs-6 controls">
                                                    <input type="text" placeholder="<?php echo $Cjob;?>" name="Cjob" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nationality</label>
                                                <div class="col-xs-6 controls">
                                                    <input type="text" placeholder="<?php echo $Nationality;?>" name="Nationality" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">About</label>
                                                <div class="col-sm-9 controls">
                                                    <textarea rows="3" class="form-control" placeholder="<?php echo $About;?>"name="About" ></textarea>
                                                </div> 
                                            </div>
                                            <div class="form-group mbn">
                                                <label class="col-sm-3 control-label"></label>
                                                <div class="col-sm-9 controls">
                                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Save
                                                    </button>&nbsp; &nbsp;<a href="#" class="btn btn-default">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    
                                    <div id="tab-edit" class="tab-pane fade">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="email" placeholder="email@yourcompany.com" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Username</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" placeholder="username" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Password</label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <input type="password" placeholder="" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Confirm Password</label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <input type="password" placeholder="" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="form-group mbn">
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9 controls">
                                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Save
                                                        </button>&nbsp; &nbsp;<a href="#" class="btn btn-default">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tab-messages" class="tab-pane fade in">
                                        <form action="php/profile_save2.php" method="post" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9 controls">
                                                    <input type="text" name= "UMail" placeholder="<?php echo $UMail;?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Mobile Phone</label>
                                                <div class="col-sm-9 controls">
                                                    <input type="text" name="Uphone" placeholder="<?php echo $Uphone;?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9 controls">
                                                    <input type="text" name="UAdress" placeholder="<?php echo $UAdress;?>" class="form-control" />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Upostcode</label>
                                                <div class="col-sm-9 controls">
                                                    <input type="text" name="Upostcode" placeholder="<?php echo $Upostcode;?>" class="form-control" />
                                                </div>
                                            </div>
                                            
                
                                            
                                            
                                            <div class="form-group mbn">
                                                <label class="col-sm-3 control-label"></label>
                                                <div class="col-sm-9 controls">
                                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Save
                                                    </button>&nbsp; &nbsp;<a href="#" class="btn btn-default">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT-->
        </div>
        <!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
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
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="js/extra-profile.js"></script>
<script type="text/javascript">
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145464-14', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>
