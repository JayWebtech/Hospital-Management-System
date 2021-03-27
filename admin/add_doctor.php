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
					<a href="diagnosis.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Diagnosis</p></a>
						<a href="appoint_his.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Appointment History</p></a>
						<a href="../index.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Logout</p></a>
				</div>
				<div class="col-md-8">
					<h3 style="font-size: 30px !important;font-weight: 1000 !important"><img src="../images/grid-img1.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM </h3>
					
					<h1>ADMIN DASHBOARD</h1>
					<ul>
						<li><a href="doctors.php">Add Specialization</a></li>
						<li><a href="add_doctor.php">Add Doctor</a></li>
						<li><a href="manage_doctor.php">Manage Doctor</a></li>
					</ul>
					<br>
					<h3 style="font-size: 20px !important;font-weight: 600 !important">ADD DOCTOR</h3>
					<?php include '../errors.php'; include '../success.php'; ?>
				<br>
					<form action="add_doctor.php" method="POST">
						<label>Doctor's Name </label>
						<input type="text" name="dname" class="form-control" placeholder="Enter Doctor's Fullname" required><br>
						<label>Email </label>
						<input type="email" name="email" class="form-control" placeholder="Enter Doctor's Email" required><br>
						<label>Phone Number </label>
						<input type="number" name="gsm" class="form-control" placeholder="Enter Doctor's GSM" required><br>
						<label>Password </label>
						<input type="password" name="pword" class="form-control" placeholder="Enter Doctor's Password" required><br>
						<select name="spec" class="form-control">
							<?php
							$ftc = "SELECT * FROM specialized";
							$runftc = mysqli_query($dbcon,$ftc);
							while ($rows = mysqli_fetch_assoc($runftc)) {

							 ?>
							 <option value="<?php echo $rows['specialization']; ?>"><?php echo $rows['specialization']; ?></option>
							<?php } ?>
						</select>
						<br>
						<button name="add_doc" class="btn btn-primary btn-sm">Submit</button>
					</form>
					<br>
					
				</div>
			</div>
		</div>
	</section>
</body>
</html>