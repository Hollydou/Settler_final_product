<?php
/**
 * Created by PhpStorm.
 * User: SJB
 * Date: 22/8/17
 * Time: 14:26
 */

include 'PasswordStorage.php';
include_once 'connection.php';
$connection=db_connect();
// the user's name
$USRNAME = $_POST['username'];
// user's email
$EMAIL = $_POST['email'];
// unhashed password
$PSW = $_POST['password'];
$REPSW = $_POST['passwordConfirm'];
//$types = array(0 => 'Customer', 1 => 'Offeror', 2 => 'Landlord', 3 => 'Organization');
//$TYPE = array_search($_POST['role'],$types);
/**
 * handle the type of users
 */
if ($_POST['role']=='User'){
    $TYPE = 0;
}else{
    $TYPE = 1;
}
/**

$FirstName = trim($_POST['firstname']);
$LastName = trim($_POST['lastname']);
$Nationality = trim($_POST['nationality']);
$Age = trim($_POST['age']);
$Phone = trim($_POST['phone-number']);


$Address = trim($_POST['address']);
$Occupation = trim($_POST['occupation']);
$Introduction = trim($_POST['introduction']);
$UID = uniqid();
//$DOB = $_POST['dateOfBirth'];
$DOB = '1992-1-1';
**/
// check if the email already in db
$query = 'SELECT * FROM User WHERE UMail = ?';
// using prepare stmt to protect database
$checking_query = mysqli_prepare($connection,$query);
// bind parameters
mysqli_stmt_bind_param($checking_query, 's', $EMAIL);
mysqli_stmt_execute($checking_query);
$result = mysqli_stmt_get_result($checking_query);
// check if email already existed in DB
if (mysqli_num_rows($result) == 0) {
    // generate unique user id
    $UID = uniqid();
    // insert a row
    $query = 'INSERT INTO User (UMail, UPass, UId, Uname,Utype)' . 'values (?,?,?,?,?)';
    $pre_stmt = mysqli_prepare($connection, $query);
    // get the password and compare it with the repetition, if not the same, stop signing up
    if (password_verify($PSW, $REPSW)) {
        echo "<p style='color:red'>Passwords you typed are not the same</p>";
    } else {
        // create hashed and salted password
        $PSW = PasswordStorage::create_hash($PSW);
        mysqli_stmt_bind_param($pre_stmt, "ssssi", $EMAIL, $PSW, $UID, $USRNAME, $TYPE);
        if (mysqli_stmt_execute($pre_stmt)) {
            mysqli_stmt_close($pre_stmt);
            mysqli_close($connection);
            // once regisered successfully, redirect to login page
            header("Location: ../index.php");

        } else {
            echo '<p style="color:red">Errors: ' . mysqli_error($connection) . '</p>';
        }
    }
}else{
    echo '<p style="color: red;">Email already existed</p>';
}


?>