<?php
/**
 * Created by PhpStorm.
 * User: SJB
 * Date: 18/9/17
 * Time: 20:31
 */
session_start();
include_once 'connection.php';
// connect to the database
$connection=db_connect();
// set the default timezone
date_default_timezone_set("Australia/Brisbane");
// get the useful information needed to apply for a job.
$Uid = $_SESSION['login_user'];
$Jid = (string)$_GET['jid'];
$Title = $_POST['applicantTitle'];
$Gender = $_POST['applicantGender'];
$FName = $_POST['applicantFirstName'];
$LName = $_POST['applicantLastName'];
$Phone = $_POST['applicantNumber'];
$Location = $_POST['applicantSuburb'];
$ethnic = $_POST['ethnicGroup'];
$Language = $_POST['applicantLanguage'];
$Experience = $_POST['applicantExperience'];
$EX = $_POST['applicantMajor'];
$Education = $_POST['applicantEducation'];
$Major = $_POST['applicantMajor'];
$Community = $_POST['applicantCommunity'];
$Hobby = $_POST['jobLanguage'];
$Intro = $_POST['jobDescription'];
$Time = date('Y-m-d H:i:s');
// job status
$Status = 'Applied';
// check if it has already been applied
$checkQuery = "SELECT * FROM Job_Application WHERE Jid='$Jid' AND Uid='$Uid'";

if (mysqli_num_rows(mysqli_query($connection,$checkQuery))!=0){
    die("You have already applied for this job");
}

$query = 'INSERT INTO Job_Application'.'
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
// prepare stmt
$pre_stmt = mysqli_prepare($connection,$query);
mysqli_stmt_bind_param($pre_stmt,'sssssssssssssssssss',
    $Uid,$Jid,$Status,$Time,$Title,$Gender,$FName,$LName,$Phone,
    $Location,$ethnic,$Language,$Experience,$EX,$Education,$Major,$Community,$Hobby,$Intro);
if (mysqli_stmt_execute($pre_stmt)) {
    mysqli_stmt_close($pre_stmt);
    mysqli_close($connection);
    // header to lookforjob 
    header("Location:../look_for_job.php");
} else {
    echo mysqli_error($connection);
    echo ' Fail to post';
}
?>