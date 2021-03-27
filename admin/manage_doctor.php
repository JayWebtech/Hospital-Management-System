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
	<link rel="stylesheet" type="text/css" href="../datatable/dataTable.bootstrap.min.css">
	<script type="text/javascript" src="../jquery/jquery.min.js"></script>
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
	
					<?php include '../errors.php'; include '../success.php'; ?>
				<br>
					<h2 style="font-size: 20px !important;font-weight: 600 !important">DOCTORS LIST</h2>
					<table width="100%" border="1">
						<tr>
							<td>S/N</td>
							<td>NAME</td>
							<td>EMAIL</td>
							<td>GSM</td>
							<td>SPECIALIZATION</td>
							<td>EDIT</td>
							<td>DELETE</td>
						</tr>
						<?php
						$sql = "SELECT * FROM doctor";
						$run = mysqli_query($dbcon,$sql);
						while ($row=mysqli_fetch_assoc($run)) {
						 ?>
						 	<tr>
						 		<td><?php echo $row['id']; ?></td>
						 		<td><?php echo $row['name']; ?></td>
						 		<td><?php echo $row['email']; ?></td>
						 		<td><?php echo $row['gsm']; ?></td>
						 		<td><?php echo $row['spec']; ?></td>
						 		<td><a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
						<td><a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Delete</a></td>
						 	</tr>
						 	 <?php include('edit_delete_modal.php'); ?>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</section>
	<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="../datatable/jquery.dataTables.min.js"></script>
<script src="../datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>