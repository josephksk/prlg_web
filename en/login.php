<?php
require_once '/var/www/html/prologes/php/facebook-php-sdk-v4-5.0.0/src/Facebook/autoload.php';
session_start();
include '_lang.php';

include '../php/fb-login.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php
	include("../_header.php");
	?>
	<title>Log In</title>
</head>
<body class="body-fullWidth">
	
	<section class="Login text-center">
		<div class="Login-header">
			<a href="index.php"><img src="../img/prologes.png" /></a>
		</div>
		<div class="Login-container">
			<h5>Start using Prologues by loging in with your user and password</h5>
			<form action="../php/submit/login.php" method="POST" class="Login-form">
				<div class="form-group">
					<label class="sr-only" for="">User</label>
				    <div class="input-group">
				        <div class="input-group-addon"><span class="fa fa-user"></span></div>
				        <input type="text" class="form-control" placeholder="User" name="user">
				    </div>
				</div>
				<div class="form-group">
					<label class="sr-only" for="">Password</label>
				    <div class="input-group">
				        <div class="input-group-addon"><span class="fa fa-lock"></span></div>
				        <input type="password" class="form-control" placeholder="Password" name="pwd">
				    </div>
				</div>
				<button type="send" class="btn Basic-button Green-button">Log In</button>
				<h5>Not a member? <a href="registration.php">Sign up</a></h5>
				<!--<h6>O utiliza tus redes sociales</h6>
				<div class="Login-buttonContainer">
					<a href="<?php echo htmlspecialchars($loginUrl); ?>" class="btn Facebook-button">Facebook</a>
					<a href="#" class="btn Google-button">Google</a>
				</div>-->
			</form>
		</div>
	</section>

</body>
</html>
