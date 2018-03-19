<?php
/**
 * Created by PhpStorm.
 * User: SJB
 * Date: 22/8/17
 * Time: 15:40
 */
$FirstName = trim($_POST['firstname']);
$LastName = trim($_POST['lastname']);
$Nationality = trim($_POST['nationality']);
$Age = trim($_POST['age']);
$Phone = trim($_POST['phone-number']);

return array(1 => $FirstName, 2 => $LastName, 3 => $Nationality, 4 => $Age, 5 => $Phone);

?>