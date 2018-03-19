<?php
/**
 * Created by PhpStorm.
 * User: izzy
 * Date: 30/8/17
 * Time: 9:59 AM
 */

    session_start();

    if(session_destroy()){
        header("Location: login.php");
    }

?>