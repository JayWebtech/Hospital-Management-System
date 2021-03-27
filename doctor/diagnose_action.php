<?php
session_start();
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
	echo "<script>window.open('login.php','_self')</script>";
}
include("../server.php");
include("../db_connection.php");
$errors = array();
$success = array();
					if (isset($_POST['diagnose'])) {
						$dmail = $_POST['dmail'];
						$emailu = $_POST['email'];
						$symptoms = $_POST['symptoms'];
						$symptomss=implode(', ', $symptoms);
						$chkmail = "SELECT * FROM  users WHERE email = '$emailu'";
						$chkrun = mysqli_query($dbcon,$chkmail);
						if (mysqli_num_rows($chkrun)>0) {
							$diagnose = "SELECT * FROM diagnosis WHERE symp LIKE '%$symptomss%'";
							$diagnoserun = mysqli_query($dbcon,$diagnose);
							if (mysqli_num_rows($diagnoserun)>0) {
								

							}
							else{
								array_push($errors, "No Record found $symptomss");
							}
						}
						else{
							array_push($errors, "Patient Email not Registered");
						}
					}


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
				<div class="col-md-8" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('../images/box-img2.jpg');background-size: cover;background-position: center;background-repeat: no-repeat;">
					<h3 style="font-size: 30px !important;font-weight: 1000 !important;color: #fff !important"><img src="../images/grid-img1.png" style="width: 50px;height: 50px;"> HOSPITAL MANAGEMENT SYSTEM </h3>
					
					<h1 style="color: #fff !important">DOCTOR DASHBOARD</h1>
					<h3 style="font-size: 20px !important;font-weight: 600 !important;color: #fff !important">DIAGNOSIS RESULT</h3>
					<p><?php include '../errors.php'; include '../success.php'; ?></p>
					
					<?php
					$chkmail = "SELECT * FROM  users WHERE email = '$emailu'";
						$chkrun = mysqli_query($dbcon,$chkmail);
						if (mysqli_num_rows($chkrun)>0) {
							$diagnose = "SELECT * FROM diagnosis WHERE symp LIKE '%$symptomss%'";
							$diagnoserun = mysqli_query($dbcon,$diagnose);
							if (mysqli_num_rows($diagnoserun)>0) {
								while ($rows=mysqli_fetch_assoc($diagnoserun)) {
						echo "
						<h2 style='background-color: #3391E7;padding: 5px;color:#fff;'>".$rows['sname']." HAS A SIMILAR SYMPTOMS</h2>
								<table width='100%' style='background-color: #fff' border='1'>
								<form action='diagnose_action.php' method='POST'>
						<tr>
							<td valign='top'><span style='font-weight: 1000 !important'>SICKNESS NAME</td>
							<td><input type='hidden' name='sname' value='".$rows['sname']."'>".$rows['sname']."</td>
						</tr>
						<tr>
							<td valign='top'><span style='font-weight: 1000 !important'>BRIEF ON SICKNESS</td>
							<td><input type='hidden' name='bsick' value='".$rows['bsick']."'>".$rows['bsick']."</td>
						</tr>
						<tr>
							<td valign='top'><span style='font-weight: 1000 !important'>SYMPTOMS</td>
							<td><input type='hidden' name='symp' value='".$rows['symp']."'>".$rows['symp']."</td>
						</tr>
						<tr>
							<td valign='top'><span style='font-weight: 1000 !important'>CAUSE</td>
							<td><input type='hidden' name='dcause' value='".$rows['dcause']."'>".$rows['dcause']."</td>
						</tr>
						<tr>
							<td valign='top'><span style='font-weight: 1000 !important'>TREATMENT</td>
							<td><input type='hidden' name='treat' value='".$rows['treat']."'>".$rows['treat']."</td>
						</tr>
						<tr>
							<td valign='top'><span style='font-weight: 1000 !important'>PREVENTION</td>
							<td><input type='hidden' name='prev' value='".$rows['prev']."'><input type='hidden' name='email' value='".$email."'><input type='hidden' name='emailu' value='".$emailu."'>".$rows['prev']."</td>
						</tr>
							<tr>
							<td valign='top'><span style='font-weight: 1000 !important'>ACTION</td>
							<td><button name='save' class='btn btn-danger'>SAVE</button></td>
						</tr>
						</form>		
					</table>



						";
					}

							}
							else{
								array_push($errors, "No Record found $symptomss");
							}
						}
						else{
							array_push($errors, "Patient Email not Registered");
						}
					

					 ?>
				<br><br>
				</div>
			</div>
		</div>
	</section>
	<script src="../js/script.js"></script>
</body>
</html>