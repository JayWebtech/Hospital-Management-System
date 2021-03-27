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
				<div class="col-md-8">
					<h3 style="float: right;font-size: 30px !important;font-weight: 1000 !important"><img src="../images/8.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM <span style="color: #3391E7">WELCOME    <?php echo $row['fullName']; ?></span></h3>
					<br><br><br><br><br>
					<h1>USER DASHBOARD</h1>
					<br><br><br>
					<div class="col-md-4">
						<center><img src="../images/1.png" style="border: 4px solid #3391E7;border-radius: 50%;padding: 20px"></center>
						<h6 align="center">MY PROFILE</h6>
						<p align="center"><a href="update_profile.php">Update Profile</a></p>
					</div>
					<div class="col-md-4">
						<center><img src="../images/4.png" style="border: 4px solid #3391E7;border-radius: 50%;padding: 20px"></center>
						<h6 align="center">VIEW APPOINTMENT</h6>
						<p align="center"><a href="view_appoint.php">View Appointment</a></p>
					</div>
					<div class="col-md-4">
						<center><img src="../images/5.png" style="border: 4px solid #3391E7;border-radius: 50%;padding: 20px"></center>
						<h6 align="center">VIEW DIAGNOSIS</h6>
						<p align="center"><a href="view_diagnosis.php">View Diagnosis</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>