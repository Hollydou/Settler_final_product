<?php
/**
 * Created by PhpStorm.
 * User: Izzy
 * Date: 24/8/17
 * Time: 1:57 PM
 */

    include_once 'connection.php';
    $connection=db_connect();
   
    if(isset($_SESSION['login_user'])) {
        $uid = $_SESSION['login_user'];
        $sql = "select * from Job_Application A, Job J where Uid = '$uid' and A.Jid = J.JID  ";
        $result = mysqli_query($connection, $sql);
        $count = mysqli_num_rows($result);


        if ($count > 0) {
            //output data of each row
            $num = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $num++;
                $jobName = $row['JName'];
                $type = "Job";
                $jobSalary = $row['JSalary'];
                $dateApplied = $row['Time'];
                $status = $row['Status'];

                echo '   	
                <tr>
                    <td>' . $num . '</td>
                    <td>' . $jobName . '</td>
                    <td>' . $type . '</td>
                    <td>' . $jobSalary . '</td>
                    <td>' . $dateApplied . '</td>
                    <td>' . $status . '</td>
                </tr>                  
            
            ';

            }

        }
    }






?>