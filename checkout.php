<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<style>
		
	</style>
	<script>
		$(document).ready(function(){
			$('.login_button ').click(function(){
				$('.login').toggle("slow");
			})
			$('.register_button').click(function(){
				window.location= 'registration.php';
			})
			$('.creditcard_submit').bind(function(){
				
			})
		})
	</script>
</head>
<body>
	<?php 
		include("login_session.php");
		
	 ?>
	 <div class="container clearfix">
		<div class="sidebar"></div>
		<div class="content">
			<?php 
				$finalprice= $_POST['finalprice'];
				echo '<div class="finalprice">Total Amount:$'.$finalprice.'</div>
				<p>please enter your credit card number</p>';
				if(isset($_POST['creditcard]'])){
					$creditcard = $_POST['creditcard'];
					$creditcardno = str_replace("-", "", str_replace(" ", "", $creditcard));
					$nonnos = "/[0-9]{16}/";
					if (preg_match($nonnos, $creditcardno)) {
						echo "$creditcardno";
						
						if (strlen($creditcardno)==16) {
							echo "Thank You";
							session_destroy();
						}
						else{
							echo ' credit card number should contain 16 numbers. Click <button onclick-"window.history.back()"></button> ';

						}
					}
					if(strlen($creditcardno)==0){
						echo ' please enter a valid credit card number';
					}
					
				}
				else{
					echo '<form id="creditcard_submit"action="checkout.php" method="post">
							<input type="text" name="creditcard" >	
							<input type="submit" name="continue" value="Checkout">
						</form>';
				}

			 ?>
		</div>
	</div>
	<div class="footer"></div>
</body>
</html>