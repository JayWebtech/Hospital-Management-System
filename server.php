<?php 
session_start();
include("db_connection.php");

$errors = array();
$success = array();

if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$pword = $_POST['pword'];

	$sql = "INSERT INTO users (fullName,address,state,gender,email,password) VALUES ('$fname','$address','$state','$gender','$email','$pword')";
	if (mysqli_query($dbcon,$sql)) {
	array_push($success, "Registration Successful");
	}
	else{
		array_push($errors, "Registration not Successful");
	}
}

if (isset($_POST['plogin'])) {
	$email = $_POST['email'];
	$pword = $_POST['pword'];

	$plog = "SELECT * FROM users WHERE email = '$email' AND password = '$pword'";
	$prun = mysqli_query($dbcon,$plog);
	if (mysqli_num_rows($prun)>0) {
		$_SESSION['email'] = $email;
		echo "<script>window.open('dashboard.php','_self')</script>";
	}
	else{
		array_push($errors, "Login details are incorrect");
	}

}
if (isset($_POST['upddoc'])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gsm = $_POST['gsm'];
	$pword = $_POST['pword'];

	$sql = "UPDATE doctor SET name='$name', email = '$email',gsm = '$gsm',pword='$pword'";
	if (mysqli_query($dbcon,$sql)) {
	array_push($success, "Record Updated Successfully");
	}
	else{
		array_push($errors, "Record not updated Successfully");
	}


}

if (isset($_POST['dlogin'])) {
	$email = $_POST['email'];
	$pword = $_POST['pword'];

	$plog = "SELECT * FROM doctor WHERE email = '$email' AND pword = '$pword'";
	$prun = mysqli_query($dbcon,$plog);
	if (mysqli_num_rows($prun)>0) {
		$_SESSION['email'] = $email;
		echo "<script>window.open('dashboard.php','_self')</script>";
	}
	else{
		array_push($errors, "Login details are incorrect");
	}

}
if (isset($_POST['alogin'])) {
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];

	$plog = "SELECT * FROM admin WHERE uname = '$uname' AND pword = '$pword'";
	$prun = mysqli_query($dbcon,$plog);
	if (mysqli_num_rows($prun)>0) {
		echo "<script>window.open('dashboard.php','_self')</script>";
	}
	else{
		array_push($errors, "Login details are incorrect");
	}

}

if (isset($_POST['add_spec'])) {
	
	$spec = $_POST['spec'];

	$sql = "INSERT INTO specialized (specialization) VALUES ('$spec')";
	if (mysqli_query($dbcon,$sql)) {
	array_push($success, "Specialization Added Successfully");
	}
	else{
		array_push($errors, "Specialization not Added Successfully");
	}


}
if (isset($_POST['add_doc'])) {
	
	$dname = $_POST['dname'];
	$email = $_POST['email'];
	$gsm = $_POST['gsm'];
	$pword = $_POST['pword'];
	$spec = $_POST['spec'];

	$sql = "INSERT INTO doctor (name, email,gsm,pword,spec) VALUES ('$dname','$email','$gsm','$pword','$spec')";
	if (mysqli_query($dbcon,$sql)) {
	array_push($success, "Doctor Added Successfully");
	}
	else{
		array_push($errors, "Doctor not Added Successfully");
	}


}
if (isset($_POST['add_sic'])) {
	$sname = $_POST['sname'];
	$bsick = $_POST['bsick'];
	$symptoms = $_POST['symptoms'];
	$woc = $_POST['woc'];
	$dp = $_POST['dp'];
	$pre = $_POST['pre'];

	$symptomss=implode(', ', $symptoms);
	$wocs=implode(', ', $woc);
	$dps=implode(', ', $dp);
	$pres=implode(', ', $pre);

	$sick = "INSERT INTO diagnosis (sname,bsick,symp,dcause,treat,prev) VALUES ('$sname','$bsick','$symptomss','$wocs','$dps','$pres')";
	if (mysqli_query($dbcon,$sick)) {
		array_push($success, "Sickness Added Successfully");
		
	}
	else{
		array_push($errors, "Sickness not Added Successfully");
	}
}

if (isset($_POST['appoint'])) {
	$Doctorspecialization = $_POST['Doctorspecialization'];
	$doctor = $_POST['doctor'];
	$pname = $_POST['pname'];
	$email = $_POST['email'];
	$adate = $_POST['adate'];
	$atime = $_POST['atime'];

	if (empty($Doctorspecialization)) {
		array_push($errors, "Select Doctor Specialization");
	}
	if (empty($doctor)) {
		array_push($errors, "Select a Doctor");
	}

	$app = "INSERT INTO appointment (dname,pname,email,spec, adate,atime,status) VALUES ('$doctor','$pname','$email','$Doctorspecialization','$adate','$atime','PENDING')";
	if (mysqli_query($dbcon,$app)) {
		array_push($success, "Appointment made Successfully");
	}
	else{
		array_push($errors, "Appointment not Successful");
	}


}

if (isset($_POST['save'])) {
$sname = $_POST['sname'];
$bsick = $_POST['bsick'];
$symp = $_POST['symp'];
$dcause = $_POST['dcause'];
$treat = $_POST['treat'];
$prev = $_POST['prev'];
$email = $_POST['email'];
$emailu = $_POST['emailu'];

$save_run = "INSERT INTO diagnosed_list (pat_email,symp,sick_name,treatment, prev, doc_email) VALUES ('$emailu','$symp','$sname','$treat','$prev','$email')";
if (mysqli_query($dbcon,$save_run)) {
	echo "<script>alert('Save Successful')</script>";
	echo "<script>window.open('diagnose.php','_self')</script>";
}
else{
		echo "<script>alert('not Successful')</script>";
	echo "<script>window.open('diagnose.php','_self')</script>";
	}
}

?>


