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
		})
	</script>
</head>
<body>
	<?php  
		include("login_session.php");
		
	?>
<div class="container clearfix">
		<div class="content">
			<?php  
				if(isset($_SESSION['Cart'])){
					include("DBConnect.php");
					
					echo "<br>";
					$finalTotal= 0;
					foreach (array_count_values($_SESSION['Cart']) as $key => $value) {
						$SQLstring = 'SELECT * FROM books INNER JOIN  Authors  WHERE Authors.author_id= books.author_id and books.title="'.$key.'"';
						$QueryResult = mysql_query($SQLstring,$DBConnect);
						if($QueryResult !=0){
							$Row = mysql_fetch_row($QueryResult);
							$id= $Row[0];
							$title= $Row[1];
							$year= $Row[3];
							$price= $Row[4];
							$author= $Row[6];
							$finalTotal= $finalTotal + ($price * $value);
							echo '<div class="books" style="margin-left:20px">
									<div class="title">
										'.$title.'
									</div>
									<div class="price">Price:
										'.$price.'
									</div>
									<div class="author">Author:
										'.$author.'
									</div>
									<div class="year">Year:
										'.$year.'
									</div>		

									<div class="fr" style="margin-top: -60px">
										<div class="totalprice">
											Total Price:'.$price * $value.'
										</div>	
										<div class="quantity">Quantity:'.$value.' </div>
										
										
									</div>

								</div>';
						}	
						
					}
					
					
				}
			?>

		</div>	
		<div class="sidebar" style="float:right;">
			<div style="margin-left:20px">
				<button onclick='window.history.back()' style="width: 150px; height: 40px;">back</button>
					<?php 
						echo '<div class="finalprice">
								Total: '.$finalTotal.'
						</div>
						<form method="post" action="checkout.php"  >
							<input type="hidden" name="finalprice" value="'.$finalTotal.'" name="finalprice">
							<input type="submit" action="checkout.php" value="checkout" style="width: 150px; height: 40px;">

						</form>
						
						
						';

					 ?>
				
			</div>
		</div>
</body>
</html>