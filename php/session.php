<?php
/**
 * Created by PhpStorm.
 * User: SJB
 * Date: 1/9/17
 * Time: 10:16
 */
session_start();
if (!(isset($_SESSION['login_user']))){
    header("Location:../index.php");
}
?>