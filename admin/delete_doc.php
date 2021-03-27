<?php

include '../db_connection.php';
$errors = array();
$success = array();

$id = $_GET['id'];

$sql = "DELETE FROM doctor WHERE id='$id'";
if (mysqli_query($dbcon,$sql)) {
	echo "<script>alert('Deleted Successful')</script>";
	echo "<script>window.open('add_doctor.php','_self')</script>";
}
else{
	echo "<script>alert('Delete not successful')</script>";
	echo "<script>window.open('add_doctor.php','_self')</script>";
}


?>