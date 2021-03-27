<?php
session_start();
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
include("../server.php");
include("../db_connection.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
		td{
			padding: 5px;
			border: 1px solid #999;
		}
		label{
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
					<h3 style="font-size: 20px !important;font-weight: 600 !important">DIAGNOSE PATIENT</h3>
					<?php include '../errors.php'; include '../success.php'; ?>
					<br>
					
					<form action="diagnose_action.php" method="POST">
						<div class="form-group">
							<label>Patient Email</label>
							<input type="hidden" name="dmail" value="<?php echo $email; ?>">	
							<input type="email" name="email" class="form-control" placeholder="Enter Patient's Email">	
						</div>
						

						<div id="symptom">
							<div class="form-group">
							<div class="col-md-6">
								
									<label>Enter Symptoms</label>
									<input type="text" name="symptoms[]" placeholder="Enter Symptoms" class="form-control" required="required"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<br><br>
								<button name="diagnose" class="btn btn-primary">DIAGNOSE</button>
								<br><br><br>
							</div>
							
						</div> 
					</form>
				<br>
					
				</div>
			</div>
		</div>
	</section>
	<script src="../js/script.js"></script>
</body>
</html>