<?php
	include "php/session.php";
	include_once 'php/connection.php';
	$connection=db_connect();

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
	
	$UMail = $_POST['UMail'];
	$UAdress = $_POST['UAdress'];
	$Upostcode = $_POST['Upostcode'];
	$Uphone = $_POST['Uphone'];

	if ( $UMail == '' ){ $UMail = $JsonUMail;}
	if ( $UAdress == '' ){ $UAdress = $JsonUAdress;}
	if ( $Upostcode == '' ){ $Upostcode = $JsonUpostcode;}
	if ( $Uphone == '' ){ $Uphone = $JsonUphone;}
	
	$sql = "UPDATE User SET 
	UMail='".$UMail."', 
	UAdress='".$UAdress."', 
	Upostcode='".$Upostcode."', 
	Uphone='".$Uphone."'
	WHERE UID = $UID";

	if (mysqli_query($connection, $sql)) {
		header ('Location: profile.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
?>