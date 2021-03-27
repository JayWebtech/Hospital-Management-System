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
	<script>
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});
}
</script>
<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>	

<style type="text/css">
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
					<a href="book_appoint.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-edit"></span> Book Appointment</p></a>
					<a href="view_appoint.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Appointment History</p></a>
						<a href="view_diagnosis.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Diagnosis History</p></a>
						<a href="../index.php" style="color: #333;text-decoration: none;"><p><span class="glyphicon glyphicon-th-large"></span> Logout</p></a>
				</div>
				<div class="col-md-8">
					<h3 style="float: right;font-size: 30px !important;font-weight: 1000 !important"><img src="../images/8.png" style="width: 50px;height: 50px"> HOSPITAL MANAGEMENT SYSTEM <span style="color: #3391E7">WELCOME    <?php echo $row['fullName']; $ppname =  $row['fullName']; ?></span></h3>
					<br><br><br><br><br>
					<h1>BOOK APPOINTMENT</h1>
					<br>
					<?php include '../errors.php'; include '../success.php'; ?>
				<br>
					<form action="book_appoint.php" method="POST">
						<label>Doctor Specialization</label>
						<select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
								<option value="">Select Specialization</option>
								<?php 
								$ret="SELECT * FROM specialized";
								$spe = mysqli_query($dbcon,$ret);
								while($rows=mysqli_fetch_array($spe)){
															?>
																<option value="<?php echo htmlentities($rows['specialization']);?>">
																	<?php echo htmlentities($rows['specialization']);?>
																</option>
																<?php } ?>
																
															</select>

						<div class="form-group">
							<br>
															<label for="doctor">
																Doctors
															</label>
						<select name="doctor" class="form-control" id="doctor" onChange="getfee(this.value);" required="required">
						<option value="">Select Doctor</option>
						</select>
														</div>

						<div class="form-group">
							<label>Date</label>
							<input type="hidden" name="pname" value="<?php echo $ppname; ?>" class="form-control">
							<input type="hidden" name="email" value="<?php echo $email; ?>" class="form-control">
							<input type="date" name="adate" class="form-control">
						</div>
						<div class="form-group">
							<label>Time</label>
							
							<input type="time" name="atime" class="form-control">
						</div>
						<div class="form-group">
							<button name="appoint" class="btn btn-primary">SUBMIT</button>
						</div>


					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>