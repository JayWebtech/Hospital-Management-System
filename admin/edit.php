<?php
	include_once('../db_connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$dname = $_POST['name'];
	$email = $_POST['email'];
	$gsm = $_POST['gsm'];
	$spec = $_POST['spec'];

		$sql = "UPDATE doctor SET name = '$dname', email = '$email', gsm = '$gsm', spec = '$spec' WHERE id = '$id'";

		if (mysqli_query($dbcon,$sql)) {
			echo "<script>alert('Update Successful!')</script>";
			echo "<script>window.open('manage_doctor.php','_self')</script>";
		}
		else{
			echo "<script>alert('Update unsuccessful!')</script>";
			echo "<script>window.open('manage_doctor.php','_self')</script>";
		}
}
?>