<?php
session_start();

include("../server.php");
include("../db_connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
		ul{
			margin: 0;
			padding: 0;
			list-style: none;
			overflow: hidden;
		}
		li{
			float: left;
		}
		li a{
			display: block;
			background-color: #3391E7;
			padding: 10px;
			color: #fff;
			text-decoration: none !important;
		}
		table{
			border: 1px solid #ddd;
		}
		td{
			border: 1px solid #ddd;
			padding: 5px;
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
					<a href="doctors.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-edit"></span> Doctors</p></a>
					<a href="patient.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Patients</p></a>
						<a href="appoint_his.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Appointment History</p></a>
						<a href="diagnosis.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Diagnosis</p></a>
						<a href="../index.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Logout</p></a>
				</div>
				<div class="col-md-8">
					<h3 style="font-size: 30px !important;font-weight: 1000 !important"><img src="../images/grid-img1.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM </h3>
					
					<h1>ADMIN DASHBOARD</h1>
					<h3 style="font-size: 20px !important;font-weight: 600 !important">MANAGE PATIENT</h3>
					<?php include '../errors.php'; include '../success.php'; ?>
				<br>
					<table width="100%" border="1">
						<tr>
							<td>S/N</td>
							<td>NAME</td>
							<td>ADDRESS</td>
							<td>STATE</td>
							<td>GENDER</td>
							<td>EMAIL</td>
							<td>DELETE</td>
						</tr>
						<?php
						$sql = "SELECT * FROM users";
						$run = mysqli_query($dbcon,$sql);
						while ($row=mysqli_fetch_assoc($run)) {
						 ?>
						 	<tr>
						 		<td><?php echo $row['id']; ?></td>
						 		<td><?php echo $row['fullName']; ?></td>
						 		<td><?php echo $row['address']; ?></td>
						 		<td><?php echo $row['state']; ?></td>
						 		<td><?php echo $row['gender']; ?></td>
						 		<td><?php echo $row['email']; ?></td>
						 		<td><a href="delete_pat.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Delete</button></a></td>
						 	</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>
</html>