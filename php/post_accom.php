<?php
/**
 * Created by PhpStorm.
 * User: izzy
 * Date: 27/9/17
 * Time: 6:17 PM
 */
include "session.php";
include_once 'connection.php';
$connection=db_connect();

date_default_timezone_set("Australia/Brisbane");
$location = $_POST['houseLocation'];
$suburb = $_POST['houseSuburb'];
$postcode = $_POST['housePostcode'];
$type = $_POST['houseType'];
$people = $_POST['housePeopleNum'];
$rentPerWeek = $_POST['houseRent'];
$bathroom = $_POST['houseBathNum'];
$bedroom = $_POST['houseBedroomNum'];
$carPark = $_POST['houseCarPark'];
$email = $_POST['houseEmail'];
$phone = $_POST['housePhone'];
$description = $_POST['houseDescription'];

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
    $AID = uniqid();

    $Time = date('Y-m-d H:i:s');
    $query2 = 'INSERT INTO Accommodation (AID,ALocation,ASuburb,APostcode,PropertyType,NoPeople,RentalperWeek,NoBathroom,NoBedroom,NoCarpark,
Email,Phone,Description,Time,UID)' . 'Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $stmt2 = mysqli_prepare($connection, $query2);
    if (!$stmt2) {
        echo mysqli_error($connection);

    }
    mysqli_stmt_bind_param($stmt2, 'sssssssssssssss', $AID, $location, $suburb, $postcode, $type, $people,
        $rentPerWeek, $bathroom, $bedroom, $carPark, $email, $phone, $description, $Time, $Uid);
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