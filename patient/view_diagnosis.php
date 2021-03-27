<?php
session_start();
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
include("../server.php");
include("../db_connection.php");
$sql = "SELECT * FROM users WHERE email = '$email'";
$run = mysqli_query($dbcon,$sql);
$row = mysqli_fetch_assoc($run);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../jquery/jquery.min.js"></script>

<style type="text/css">
	label{
		font-weight: 600 !important;
	}
	td{
		padding: 5px;
		border: 2px solid #3391E7;
	}
</style>
</head>
<body>
	<section id="pdash">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<h3>HMS</h3>
					<h4>Main Navigation</h4>
					<a href="dashboard.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-home"></span> Dashboard</p></a>
					<a href="book_appoint.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-edit"></span> Book Appointment</p></a>
					<a href="view_appoint.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Appointment History</p></a>
						<a href="view_diagnosis.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Diagnosis History</p></a>
						<a href="../index.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Logout</p></a>
				</div>
				<div class="col-md-9">
					<h3 style="float: right;font-size: 30px !important;font-weight: 1000 !important"><img src="../images/8.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM <span style="color: #3391E7">WELCOME    <?php echo $row['fullName']; $ppname =  $row['fullName']; ?></span></h3>
					<br><br><br><br><br>
					<h1 style="font-size: 20px !important;font-weight: 1000 !important">DIAGNOSIS REPORT</h1>
					<?php include '../errors.php'; include '../success.php'; ?>
				<br>
					<table width="100%" border="1">
						<tr>
							<td style="font-weight: 600 !important" valign="top">S/N</td>
							<td style="font-weight: 600 !important" valign="top">SYMPTOMS</td>
							<td style="font-weight: 600 !important" valign="top">SICKNESS NAME</td>
							<td style="font-weight: 600 !important" valign="top">TREATMENT</td>
							<td style="font-weight: 600 !important" valign="top">PREVENTION</td>
							<td style="font-weight: 600 !important" valign="top">DIAGNOSIS DATE</td>
							
						</tr>
						<?php
						$sql = "SELECT * FROM  diagnosed_list WHERE pat_email = '$email'";
						$run = mysqli_query($dbcon,$sql);
						while ($row=mysqli_fetch_assoc($run)) {
						 ?>
						 	<tr>
						 		<td valign="top"><?php echo $row['id']; ?></td>
						 		<td valign="top"><?php echo $row['symp']; ?></td>
						 		<td valign="top"><?php echo $row['sick_name']; ?></td>
						 		<td valign="top"><?php echo $row['treatment']; ?></td>
						 		<td valign="top"><?php echo $row['prev']; ?></td>
						 		<td valign="top"><?php echo $row['diag_date']; ?></td>
						 	</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>