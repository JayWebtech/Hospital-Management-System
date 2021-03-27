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
	</section>
	<section id="plogin">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4" id="reglog">
				<h1 align="center">PATIENT REGISTRATION</h1>
				<?php include '../errors.php'; include '../success.php'; ?>
				<br>
				<form action="register.php" method="POST">
					<div class="form-group">
						<input type="text" name="fname" placeholder="Enter your Fullname" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="text" name="address" placeholder="Enter your Address" class="form-control" required>
					</div>
					<div class="form-group">
						<select class="form-control" name="state">
							<option value=""><-------Select State--------></option>
                      <option value="Abia">Abia</option>
                      <option value="Adamawa">Adamawa</option>
                      <option value="Akwa Ibom">Akwa Ibom</option>
                      <option value="Anambra">Anambra</option>
                      <option value="Bauchi">Bauchi</option>
                      <option value="Bayelsa">Bayelsa</option>
                      <option value="Benue">Benue</option>
                      <option value="Borno">Borno</option>
                      <option value="Cross River">Cross River</option>
                      <option value="Delta">Delta</option>
                      <option value="Ebonyi">Ebonyi</option>
                      <option value="Edo">Edo</option>
                      <option value="Ekiti">Ekiti</option>
                      <option value="Enugu">Enugu</option>
                      <option value="Gombe">Gombe</option>
                      <option value="Imo">Imo</option>
                      <option value="Jigawa">Jigawa</option>
                      <option value="Kaduna">Kaduna</option>
                      <option value="Kano">Kano</option>
                      <option value="Katsina">Katsina</option>
                      <option value="Kebbi">Kebbi</option>
                      <option value="Kogi">Kogi</option>
                      <option value="Kwara">Kwara</option>
                      <option value="Lagos">Lagos</option>
                      <option value="Nasarawa">Nasarawa</option>
                      <option value="Niger">Niger</option>
                      <option value="Ogun">Ogun</option>
                      <option value="Ondo">Ondo</option>
                      <option value="Osun">Osun</option>
                      <option value="Oyo">Oyo</option>
                      <option value="Plateau">Plateau</option>
                      <option value="Rivers">Rivers</option>
                      <option value="Sokoto">Sokoto</option>
                      <option value="Taraba">Taraba</option> 
                      <option value="Yobe">Yobe</option>
                      <option value="Zamfara">Zamfara </option> 
                      <option value="FCT">FCT </option> 

                  </select>
					</div>
					<div class="form-group">
						<select class="form-control" name="gender">
							<option><-------Select Gender----------></option>
								<option value="MALE">MALE</option>
								<option value="FEMALE">FEMALE</option>
						</select>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
					</div>
					<div class="form-group">
						<input type="password" name="pword" class="form-control" placeholder="Enter Password" required>
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-sm" name="register">REGISTER</button>
						<p></p>
						<p>Already have account? <a href="login.php" style="color: #fff">Login here</a></p>
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