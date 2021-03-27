<?php
	session_start();
	include("../db_connection.php");  
	if(isset($_GET['id'])){
		$sql = "DELETE FROM doctor WHERE id = '".$_GET['id']."'";
$run=mysqli_query($dbcon,$sql);  
if($run) {    
    echo "<script>window.open('manage_doctor.php','_self')</script>";  
}  
  
}
?>