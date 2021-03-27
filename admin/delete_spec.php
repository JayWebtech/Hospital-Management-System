<?php

include '../db_connection.php';
$errors = array();
$success = array();

$id = $_GET['id'];

$sql = "DELETE FROM specialized WHERE id='$id'";
if (mysqli_query($dbcon,$sql)) {
	echo "<script>alert('Deleted Successful')</script>";
	echo "<script>window.open('doctors.php','_self')</script>";
}
else{
	echo "<script>alert('Delete not successful')</script>";
	echo "<script>window.open('doctors.php','_self')</script>";
}


?>