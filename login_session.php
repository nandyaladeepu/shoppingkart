<?php 
	session_start();

	if(isset($_SESSION['login'])){
 		echo '<div class="header"><div class="clearfix" style="float: right;margin-top: -1PX;margin-right: 90px;"><div class="logout_button fleft"><a href="logout.php">Logout</a></div></div></div>';
	}
	else{

		echo ' <div class=" login "><form method="POST" action="verifylogin.php">Email:<input type="text" name="email" />Password:<input type="password" name="password" />			<input type="submit" name="login" value="Log In"></form></div>	<div class="header"><div class="clearfix" style="float: right;margin-top: -1PX;margin-right: 90px;"><div class="login_button fleft"> Login</div><div class="register_button fleft">Register</div>
		</div></div>';
	}

 ?>
