<!DOCTYPE html>
<html lang="en">
<head>
	<title>Course Allocation-Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body >
	
	<div class="limiter">
		<div class="container-login100"style=" linear-gradient(-135deg, #c3adc2, #5e9690);">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form METHOD="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Registration
					</span>

					
					<div class="wrap-input100 validate-input" data-validate = "insert User Name">
						<input class="input100" type="text" name="Use" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-male" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" id="password" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>				

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="com_password"  class="input100" type="password" onkeyup="checkPass(); return false;" name="com_password" placeholder="Conform Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="reg" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="index.php">
							Already registered? Sign In
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a> 
					</div>

					<div class="text-center p-t-136">
						
					</div>
			
				</form>
				
				
				
				
				
			</div>
		</div>
	</div>
	
	<?php
	INCLUDE("php.php");
	IF(ISSET($_POST['reg'])){
		
		REGISTRATION();
	}
	
	?>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>