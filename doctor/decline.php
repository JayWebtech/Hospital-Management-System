<?php
	include_once('../db_connection.php');
	$id = $_GET['id'];
		$sql = "UPDATE  appointment SET status = 'DECLINED' WHERE id = '$id'";

		if (mysqli_query($dbcon,$sql)) {
			echo "<script>alert('Declined Successful!')</script>";
			echo "<script>window.open('appoint.php','_self')</script>";
		}
		else{
			echo "<script>alert('unsuccessful!')</script>";
			echo "<script>window.open('appoint.php','_self')</script>";
		}
?>