<?php
include_once 'connection.php';
$connection=db_connect();
include 'session.php';
// define time zone
date_default_timezone_set("Australia/Brisbane");
//session_start();
// information that used to post ad
$jobName = $_POST['jobtitle'];
$companyName = $_POST['companyName'];
$jobCategory = $_POST['jobCategory'];
$companyEmail = $_POST['companyEmail'];
$jobKeyword = $_POST['jobKeyword'];
$salary = $_POST['salary'];
$jobLocation = $_POST['jobLocation'];
$jobSuburb = $_POST['jobSuburb'];
$jobPostcode = $_POST['jobPostcode'];
$jobSkills = $_POST['jobSkills'];
$jobLanguage = $_POST['jobLanguage'];
$jobDescription = $_POST['jobDescription'];
$Uid;
// check if user has logged in or not
if (isset($_SESSION['uemail'])) {
    $Uemail = $_SESSION['uemail'];
    // sql query
    $query = "SELECT * FROM User WHERE UMail = ?";
    // use prepare stmt
    $stmt = mysqli_prepare($connection, $query);

    mysqli_stmt_bind_param($stmt, 's', $Uemail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_row($result);


    // get the current user id
    $Uid = $row[2];
    mysqli_stmt_close($stmt);
    // generate the unique job id
    $Jid = uniqid();
    // get the local time of brisbane
    $Time = date('Y-m-d H:i:s');
    // insertion query
    $query2 = 'INSERT INTO Job (JID,JName,companyName,Jcategories,companyEmail,keywords,JSalary,JLocation,suburb,postcode,
JSkill,JLang,JDescription,JPostTime,JUID)' . 'Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $stmt2 = mysqli_prepare($connection, $query2);
    if (!$stmt2) {
        echo mysqli_error($connection);

    }
    mysqli_stmt_bind_param($stmt2, 'sssssssssssssss', $Jid, $jobName, $companyName, $jobCategory, $companyEmail, $jobKeyword,
        $salary, $jobLocation, $jobSuburb, $jobPostcode, $jobSkills, $jobLanguage, $jobDescription, $Time, $Uid);
    if (mysqli_stmt_execute($stmt2)) {
        mysqli_stmt_close($stmt2);
        mysqli_close($connection);
        // once post successfully, header to my listing.
        header("Location: ../mylisting.php");
    } else {
        echo mysqli_error($connection);
        echo ' Fail to post';
    }

    //upload image
    include 'upload_job_image.php';

} else {
    echo 'Please log in first.';
}

?>