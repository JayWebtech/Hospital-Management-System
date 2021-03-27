<?php
session_start();
include("../server.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Login</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="bplogin">
	<section id="nav">
		<span class="bar"><a href="../doctor/login.php">DOCTOR LOGIN</a></span>
		<span class="bar"><a href="../admin/login.php">ADMIN LOGIN</a></span>
		<span class="bar"><a href="../index.php">HOME</a></span>
	</section>
	<section id="plogin">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4" id="pplog">
				<h1 align="center">HMS | PATIENT LOGIN</h1>
				<?php include '../errors.php'; include '../success.php'; ?>
				<br>
				<form action="login.php" method="POST">
				
					<p>
						Please enter your email and password to log in.
					</p>
					<div class="form-group">
						<input type="text" name="email" placeholder="Enter your Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="pword" placeholder="Enter your Password" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-sm" name="plogin">LOGIN</button>
						<p></p>
						<p>Do not have account? <a href="register.php" style="color: #fff">Create Account</a></p>
					</div>
				
			</form>

			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
	</section>
</body>
</html>