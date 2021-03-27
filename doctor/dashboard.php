<?php
session_start();
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
include("../server.php");
include("../db_connection.php");

$try = "SELECT * FROM doctor WHERE email = '$email'";
$exe = mysqli_query($dbcon,$try);
$exer = mysqli_fetch_assoc($exe);

$docname = $exer['name'];

$sql3 = "SELECT COUNT(id) AS total3 FROM appointment WHERE dname = '$docname'";
$run3 = mysqli_query($dbcon,$sql3);
$row = mysqli_fetch_assoc($run3);
$tapp = $row['total3'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<section id="pdash">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<h3>HMS</h3>
					<h4>Main Navigation <?php echo $email; ?></h4>
					<a href="dashboard.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-home"></span> Dashboard</p></a>
					<a href="appoint.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-edit"></span> View Appointment</p></a>
					<a href="diagnose.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Diagnose Patient</p></a>
						<a href="../index.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Logout</p></a>
				</div>
				<div class="col-md-8">
					<h3 style="font-size: 30px !important;font-weight: 1000 !important"><img src="../images/grid-img1.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM </h3>
					
					<h1>DOCTOR DASHBOARD</h1>
					<br><br><br>
					<div class="col-md-4">
						<center><img src="../images/avatar-1.jpg" style="border: 4px solid #3391E7;border-radius: 50%;padding: 20px;width: 150px;height: 150px;"></center>
						<h6 align="center">PROFILE</h6>
						<a href="edit_profile.php"><p align="center" style="color: #3391E7">Edit Profile</p></a>
					</div>
					<div class="col-md-4">
						<center><img src="../images/grid-img3.png" style="border: 4px solid #3391E7;border-radius: 50%;padding: 20px;width: 150px;height: 150px;"></center>
						<h6 align="center"> APPOINTMENT</h6>
						<p align="center" style="color: #3391E7">Total Appointments: <?php echo $tapp; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>