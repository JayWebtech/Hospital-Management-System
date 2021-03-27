<?php
	include_once('../db_connection.php');
	$id = $_GET['id'];
		$sql = "UPDATE  appointment SET status = 'APPROVED' WHERE id = '$id'";

		if (mysqli_query($dbcon,$sql)) {
			echo "<script>alert('Approval Successful!')</script>";
			echo "<script>window.open('appoint.php','_self')</script>";
		}
		else{
			echo "<script>alert('Approval unsuccessful!')</script>";
			echo "<script>window.open('appoint.php','_self')</script>";
		}
?>