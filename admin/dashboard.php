<?php
session_start();

include("../server.php");
include("../db_connection.php");
$sql = "SELECT COUNT(id) AS total FROM doctor";
$run = mysqli_query($dbcon,$sql);
$row = mysqli_fetch_assoc($run);
$tdoc = $row['total'];
$sql2 = "SELECT COUNT(id) AS total2 FROM users";
$run2 = mysqli_query($dbcon,$sql2);
$row2 = mysqli_fetch_assoc($run2);
$tpat = $row2['total2'];
$sql3 = "SELECT COUNT(id) AS total3 FROM appointment";
$run3 = mysqli_query($dbcon,$sql3);
$row3 = mysqli_fetch_assoc($run3);
$tapp = $row3['total3'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
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
					<a href="doctors.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-edit"></span> Doctors</p></a>
					<a href="patient.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Patients</p></a>
						<a href="appoint_his.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Appointment History</p></a>
						<a href="diagnosis.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Diagnosis</p></a>
						<a href="../index.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Logout</p></a>
				</div>
				<div class="col-md-8">
					<h3 style="font-size: 30px !important;font-weight: 1000 !important"><img src="../images/grid-img1.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM </h3>
					
					<h1>ADMIN DASHBOARD</h1>
					<br><br><br>
					<div class="col-md-4">
						<center><img src="../images/avatar-1.jpg" style="border: 4px solid #3391E7;border-radius: 50%;padding: 20px;width: 150px;height: 150px;"></center>
						<h6 align="center">MANAGE PATIENTS</h6>
						<p align="center" style="color: #3391E7">Total Patients: <?php echo $tpat; ?></p>
					</div>
					<div class="col-md-4">
						<center><img src="../images/4.png" style="border: 4px solid #3391E7;border-radius: 50%;padding: 20px"></center>
						<h6 align="center">MANAGE DOCTORS</h6>
						<p align="center" style="color: #3391E7">Total Doctors: <?php echo $tdoc; ?></p>
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