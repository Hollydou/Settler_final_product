<?php
/**
 * Created by PhpStorm.
 * User: izzy
 * Date: 26/9/17
 * Time: 1:17 PM
 */


include_once 'connection.php';
$connection=db_connect();

session_start();
if(isset($_SESSION['login_user'])){
    $uid = $_SESSION['login_user'];

    $sql="select * from Job_Application where Uid = '$uid' ";
    $result = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);
    echo $count;

}






?>