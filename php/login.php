<?php
/**
 * Created by PhpStorm.
 * User: Izzy
 * Date: 24/8/17
 * Time: 1:57 PM
 */


//reference to:   https://www.tutorialspoint.com/php/php_mysql_login.htm
include 'PasswordStorage.php';
include_once 'connection.php';
$connection = db_connect();
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $sql = "SELECT * FROM User WHERE UMail = ?";
    $stmt = mysqli_prepare($connection,$sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_row($result);


    // If result matched $username and $password, table row must be 1 row.
    try {
        if ($result) {

            if (PasswordStorage::verify_password($_POST['password'], $row[1])) {
                $_SESSION['uemail'] = $email;
                $_SESSION['login_user'] = $row["UID"];
                if ($row["Utype"] == 0) {
                    echo "Login successfully as a user!";
                    header("Location: ../dashboard-user.php"); // it is a user
                }
                if ($row["Utype"] == 1) {
                    header("Location: ../dashboard-offeror.php");// it is an offeror

                }
            } else {
                echo "Your Login Name or Password is invalid";
            }
        }
    } catch (InvalidHashException $e) {
        echo $e->getMessage();
    }
}
    ?>