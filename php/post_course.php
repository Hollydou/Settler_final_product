<?php
/**
 * Created by PhpStorm.
 * User: izzy
 * Date: 4/10/17
 * Time: 2:42 PM
 */
include "session.php";
include_once 'connection.php';
$connection=db_connect();

date_default_timezone_set("Australia/Brisbane");
$name = $_POST['courseTitle'];
$fee = $_POST['courseFees'];
$certificate = $_POST['courseCertificate'];
$lang = $_POST['courseLang'];
$startD = $_POST['courseStartD'];
$endD = $_POST['courseEndD'];
$location = $_POST['courseLocation'];
$suburb = $_POST['courseSuburb'];
$postcode = $_POST['coursePostcode'];
$length = $_POST['courseLength'];
$courseD = $_POST['courseDay'];
$email = $_POST['courseEmail'];
$phone = $_POST['coursePhone'];
$description= $_POST['courseDescription'];

if (isset($_SESSION['uemail'])) {
    $Uemail = $_SESSION['uemail'];

    $query = "SELECT * FROM User WHERE UMail = ?";
    $stmt = mysqli_prepare($connection, $query);

    mysqli_stmt_bind_param($stmt, 's', $Uemail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_row($result);


    // get the current user id
    $Uid = $row[2];
    mysqli_stmt_close($stmt);
    $CID = uniqid();

    $Time = date('Y-m-d H:i:s');
    $query2 = 'INSERT INTO Course (CID,Name,Fee,Certificate,Language, StartDate, EndDate, Location, Suburb, Postcode, Length, DayOfCourse,
Email, Phone, Description, UID, Date)' . 'Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $stmt2 = mysqli_prepare($connection, $query2);
    if (!$stmt2) {
        echo mysqli_error($connection);

    }
    mysqli_stmt_bind_param($stmt2, 'sssssssssssssssss', $CID, $name, $fee, $certificate, $lang, $startD, $endD,
        $location, $suburb, $postcode, $length, $courseD, $email, $phone, $description, $Uid, $Time);
    if (mysqli_stmt_execute($stmt2)) {
        mysqli_stmt_close($stmt2);
        mysqli_close($connection);
        header("Location: ../mylisting.php");
    } else {
        echo mysqli_error($connection);
        echo ' Fail to post';
    }

    //upload image
    //include 'upload_job_image.php';

} else {
    echo 'Please log in first.';
}


?>