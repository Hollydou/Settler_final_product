<?php
	include "php/session.php";
	include_once 'php/connection.php';
	$connection = db_connect();
	
	$UID = '123';
	if (isset($_SESSION['login_user'])) {
		$UID = $_SESSION['login_user'];
	}
	
	$jsonData = json_decode(file_get_contents("json/profileItem.json"), true);
	foreach($jsonData as $item) {
		$JsonFname = $item['Fname'];
		$JsonLname = $item['Lname'];
		$Jsongender = $item['gender'];
		$JsonDOB = $item['DOB'];
		$JsonMstatus = $item['Mstatus'];
		$JsonCjob = $item['Cjob'];
		$JsonNationality = $item['Nationality'];
		$JsonAbout = $item['About'];
		$JsonUMail = $item['UMail'];
		$JsonUAdress = $item['UAdress'];
		$JsonUpostcode = $item['Upostcode'];
		$JsonUphone = $item['Uphone'];
	}
	
	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$gender = $_POST['Gender'];
	$DOB = $_POST['DOB'];
	$Mstatus = $_POST['Mstatus'];
	$Cjob = $_POST['Cjob'];
	$Nationality = $_POST['Nationality'];
	$About = $_POST['About'];
	
	if ( $Fname == '' ){ $Fname = $JsonFname;}
	if ( $Lname == '' ){ $Lname = $JsonLname;}
	if ( $gender == '' ){ $gender = $Jsongender;}
	if ( $gender == 'Male (Your selection)' ){ $gender = 'Male';}
	if ( $gender == 'Female (Your selection)' ){ $gender = 'Female';}
	if ( $DOB == '' ){ $DOB = $JsonDOB;}
	if ( $Mstatus == '' ){ $Mstatus = $JsonMstatus;}
	if ( $Mstatus == 'Single (Your selection)' ){ $Mstatus = 'Single';}
	if ( $Mstatus == 'Married (Your selection)' ){ $Mstatus = 'Married';}
	if ( $Cjob == '' ){ $Cjob = $JsonCjob;}
	if ( $Nationality == '' ){ $Nationality = $JsonNationality;}
	if ( $About == '' ){ $About = $JsonAbout;}
	
	$sql = "UPDATE User SET 
		UFname='".$Fname."', 
		ULname='".$Lname."', 
		Ugender='".$gender."', 
		UDoB='".$DOB."', 
		UMstatus='".$Mstatus."', 
		Uoccupation='".$Cjob."', 
		Unationality='".$Nationality."', 
		UAbout='".$About."'
		WHERE UID = $UID";

	if (mysqli_query($connection, $sql)) {
		header ('Location: profile.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
?>