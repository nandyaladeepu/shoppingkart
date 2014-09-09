<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	
	<script>
		$(document).ready(function(){
			$('.login_button ').click(function(){
				$('.login').toggle("slow");
			})
			$('.register_button').click(function(){
				window.location= 'registration.php';
			})
		})
	</script>
</head>
<body>
	<?php  
		include("login_session.php");
		if(isset($_SESSION['login'])){
			header("Location:  index.php");
		}
		else{
			echo '<div class="container clearfix">
		<form  style="background: white; padding:20px;"method="POST" action="register.php"><p>Enter your name: First<input type="text" name="first" />
			Last:<input type="text" name="last" /></p>
			<p>Enter your email address:<input type="text" name="email" /></p>
			<p>Enter a password for your account:<input type="password" name="password" /></p>
			<p>Confirm your password:<input type="password" name="password2" /></p>
			<input type="reset" name="reset" value="Reset Registration Form" /><input type="submit" name="register" value="Register" /></form>
			<!-- <h3>Returning User Login</h3>
			<form method="POST" action="verifylogin.php">
			<p>Enter your email address:<input type="text" name="email" /></p>
			<p>Enter your password:<input type="password" name="password" /></p>
			<input type="reset" name="reset" value="Reset Login Form" />
			<input type="submit" name="login" value="Log In"/> -->
		</form>
	</div>';
		}
	?>
	
	<div class="footer"></div>
</body>
</html>















