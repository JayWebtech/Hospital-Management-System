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
		label{
			font-weight: 600 !important;
			color: #fff;
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
				<div class="col-md-8" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('../images/box-img2.jpg');background-size: cover;background-position: center;background-repeat: no-repeat;">
					<h3 style="font-size: 30px !important;font-weight: 1000 !important;color: #fff"><img src="../images/grid-img1.png" style="width: 50px;height: 50px;border: 2px solid #fff;padding: 5px;border-radius: 50%;"> HOSPITAL MANAGEMENT SYSTEM </h3>
					
							<h2 style="font-weight: 600 !important; font-size: 20px !important;color: #fff"><img src="../images/5.png" style="width: 80px;height: 80px;border-radius: 50%;border:2px solid #3391E7"> DIAGNOSIS SECTION</h2>
							<?php include '../errors.php'; include '../success.php'; ?>
							<br>
							<form action="diagnosis.php" method="POST">
								<div class="form-group">
									<div class="col-md-12">
										<label>Sickness Name</label>
										<input type="text" name="sname" placeholder="Enter Sickness Name" class="form-control" required>		
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<br>
										<label>Brief About the Sickness</label>
										<textarea class="form-control" name="bsick" placeholder="Enter a Brief about the Sickness" required></textarea>
										
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<br>
							<button type="button" class="btn btn-success btn-sm" onclick="addEntryas();"><span class="glyphicon glyphicon-plus"></span> Add Symptoms</button>
							</div>	
						</div>

								<div id="symptom">
							<div class="form-group">
							<div class="col-md-6">
									<label>Sickness Symptoms</label>
									<input type="text" name="symptoms[]" placeholder="Enter Symptoms" class="form-control" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group">
									<div class="col-md-12">
										<br>
							<button type="button" class="btn btn-primary btn-sm" onclick="addEntrywoc();"><span class="glyphicon glyphicon-plus"></span>Add Causes of Disease</button>
							</div>	
						</div>

								<div id="woc">
							<div class="form-group">
							<div class="col-md-6">
									<label>Causes of Disease</label>
									<input type="text" name="woc[]" placeholder="Enter Ways of Contact" class="form-control" required="required"/>
								</div>
							</div>
						</div>

						<div class="form-group">
									<div class="col-md-12">
										<br>
							<button type="button" class="btn btn-warning btn-sm" onclick="addEntrydb();"><span class="glyphicon glyphicon-plus"></span> Add Treatment</button>
							</div>	
						</div>

								<div id="dp">
							<div class="form-group">
							<div class="col-md-6">
									<label>Treatment</label>
									<input type="text" name="dp[]" placeholder="Enter Treatment" class="form-control" required="required"/>
								</div>
							</div>
						</div>

							<div class="form-group">
									<div class="col-md-12">
										<br>
							<button type="button" class="btn btn-info btn-sm" onclick="addEntrypre();"><span class="glyphicon glyphicon-plus"></span> Add Prevention</button>
							</div>	
						</div>

								<div id="pre">
							<div class="form-group">
							<div class="col-md-6">
									<label>Prevention</label>
									<input type="text" name="pre[]" placeholder="Enter Prevention" class="form-control" required="required"/>
								</div>
							</div>


						</div>

						<div class="form-group">
							<div class="col-md-12">
								<br><br>
									<button class="btn btn-danger" name="add_sic">ADD SICKNESS</button>
									<br><br>
									<br><br>
								</div>
							</div>


							</form>

					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="../js/script2.js"></script>
	<script src="../js/script3.js"></script>
	<script src="../js/script4.js"></script>
	<script src="../js/script5.js"></script>
</body>
</html>