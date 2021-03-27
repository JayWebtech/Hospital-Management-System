<?php
session_start();
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
include("../server.php");
include("../db_connection.php");

$sql = "SELECT * FROM doctor WHERE email = '$email'";
$run = mysqli_query($dbcon,$sql);
$row = mysqli_fetch_assoc($run);
$name = $row['name'];
$gsm = $row['gsm'];
$pword = $row['pword'];
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
					<?php include '../errors.php'; include '../success.php'; ?>
				<br>
						<form action="edit_profile.php" method="POST">
							<label>Name</label>
							<input type="hidden" name="email" class="form-control" value="<?php echo $email; ?>"><br>
							<input type="text" name="name" class="form-control" value="<?php echo $name; ?>"><br>
							<label>Phone Number</label>
							<input type="text" name="gsm" class="form-control" value="<?php echo $gsm; ?>"><br>
							<label>Password</label>
							<input type="text" name="pword" class="form-control" value="<?php echo $pword; ?>"><br>
							<button name="upddoc" class="btn btn-primary">Update</button>
						</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>