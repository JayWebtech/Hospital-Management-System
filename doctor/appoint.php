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

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
		td{
			padding: 5px;
			border: 1px solid #999;
			font-weight: 600 !important;
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
					<a href="appoint.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-edit"></span> View Appointment</p></a>
					<a href="diagnose.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Diagnose Patient</p></a>
						<a href="../index.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Logout</p></a>
				</div>
				<div class="col-md-8">
					<h3 style="font-size: 30px !important;font-weight: 1000 !important"><img src="../images/grid-img1.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM </h3>
					
					<h1>DOCTOR DASHBOARD</h1>
					<br>
					<h3 style="font-size: 20px !important;font-weight: 600 !important">APPOINTMENT HISTORY</h3>
					<?php include '../errors.php'; include '../success.php'; ?>
				<br>
					<table width="100%" border="1">
						<tr>
							<td>S/N</td>
							<td>DOCTOR NAME</td>
							<td>PATIENT NAME</td>
							<td>EMAIL</td>
							<td>SPECIALIZATION</td>
							<td>APPOINTMENT DATE</td>
							<td>APPOINTMENT TIME</td>
							<td>STATUS</td>
							<td>ACTION</td>
							<td>ACTION</td>
						</tr>
						<?php
						$sql = "SELECT * FROM Appointment WHERE dname = '$docname'";
						$run = mysqli_query($dbcon,$sql);
						while ($row=mysqli_fetch_assoc($run)) {
						 ?>
						 	<tr>
						 		<td><?php echo $row['id']; ?></td>
						 		<td><?php echo $row['dname']; ?></td>
						 		<td><?php echo $row['pname']; ?></td>
						 		<td><?php echo $row['email']; ?></td>
						 		<td><?php echo $row['spec']; ?></td>
						 		<td><?php echo $row['adate']; ?></td>
						 		<td><?php echo $row['atime']; ?></td>
						 		<td><?php echo $row['status']; ?></td>
						 		<td><a href="approve.php?id=<?php echo  $row['id']; ?>"><button class="btn btn-primary">Approve</button></a></td>
						 		<td><a href="decline.php?id=<?php echo  $row['id']; ?>"><button class="btn btn-danger">Decline</button></a></td>
						 	</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>