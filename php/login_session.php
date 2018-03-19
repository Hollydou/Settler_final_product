<?php
/**
 * Created by PhpStorm.
 * User: izzy
 * Date: 30/8/17
 * Time: 9:49 AM
 */

    include_once 'connection.php';
    $connection=db_connect();
    session_start();

    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($connection, "select * from User where UID = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['username'];

    if(!isset($_SESSION['login_user'])){
        header("location:index.php");
    }


?>