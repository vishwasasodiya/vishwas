<?php
	include "include/header.php";
	include "login-db.php";

	//before login
	if(isset($_SESSION["customer"]))
	{
		setMsg("your Already login","red");
		redirect('c_password.php');
	}
?>
<?php getmsg(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" style="margin-top:0px;">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form method="post" class="login100-form validate-form" style="margin-top:-70px;">
					<?php getmsg(); ?>
					<span class="login100-form-title p-b-20">
						Welcome
					</span>
					<span class=""> <center>
						<img src="images/logo.png" alt="AVATAR" style="width:auto; height:auto;"> </center>
					</span>

					<div class="wrap-input100 validate-input m-b-35" style="margin-top:30px;" data-validate = "Enter username">
						<input class="input100" type="text" name="user_name" 
						value="<?php if(isset($_COOKIE['user_name'])) { echo $_COOKIE['user_name']; } ?>">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" style="margin-bottom:30px;" data-validate="Enter password">
						<input class="input100" type="password" name="user_password" 
						value="<?php if(isset($_COOKIE['user_password'])) { echo $_COOKIE['user_password']; } ?>">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<input type="checkbox" name="remember" style="height:15px; margin-bottom:20px;" onclick="javascript: return confirm('Are sure to remember your password')" /> Remember Me

					<div class="container-login100-form-btn" style="margin-top:0px;">
						<input type="submit" name="submit" class="login100-form-btn" value="Login" />
					</div>

					<ul class="login-more" style="margin-top:20px;">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="sign_up.php" class="txt2">
								Sign up
							</a>
						</li>
						
					</ul>
				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
	include "include/footer.php";
?>