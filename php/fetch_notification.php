<?php
/**
 * Created by PhpStorm.
 * User: Izzy
 * Date: 24/8/17
 * Time: 1:57 PM
 */
 	

    include_once "connection.php";
    $connection=db_connect();


    if(isset($_SESSION['login_user'])) {
        $uid = $_SESSION['login_user'];
        $sql = "select * from Job_Application A, Job J where Uid = '$uid' and A.Jid = J.JID  ";
        $result = mysqli_query($connection, $sql);
        $count = mysqli_num_rows($result);


        if ($count > 0) {
            //output data of each row
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $status = $row['Status'];

                $jobname = $row['JName'];


                if ($status == 'Applied') {
                    echo '
            <div class = "panel notification">
                <div class = "panel-body">
                    <div class = "row">
                        <div class = "col-sm-12 col-md-12">
                            <div class="title"><h3> Job Application for '. $jobname. '</h3></div>
                                <hr>
                            	<div class="noti-content">  Your application for <span style="color: #76BDDB">' . $jobname . '</span> is pending. </div>
                            </div>
                               <!-- <div class = "col-sm-12 col-md-12 text-right">
                                   <input type="submit" class="btn btn-info" value ="View"/>
                               </div>-->
                           </div>
                        </div>
                    </div>
            ';
                }
                if ($status == 'Accepted') {
                    $offerorid = $row['JUID'];
                    $sql1 = "select * from User  where UID = '$offerorid' ";
                    $result1 = mysqli_query($connection, $sql1);
                    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
                    $Fname = $row1['UFname'];
                    $Lname = $row1['ULname'];

                    echo '
            <div class = "panel notification">
                <div class = "panel-body">
                    <div class = "row">
                        <div class = "col-sm-12 col-md-12">
                            <div class="title"><h3> Job Application for '. $jobname. '</h3></div>
                                <hr>
                            	<div class="noti-content"><span style="color: #76BDDB">' . $Fname . ' ' . $Lname . '</span> has accepted your application for <span style="color: #76BDDB">' . $jobname . '</span>.</div>
                            </div>
                                <div class = "col-sm-12 col-md-12 text-right">
                                   <input type="submit" class="btn btn-info" value ="View"/>
                               </div>
                           </div>
                        </div>
                    </div>
            ';
                }


            }


        }
    }
    
?>