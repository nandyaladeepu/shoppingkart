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
		<div class="sidebar">
				<form method="post" action="cart.php"  >
				 	<input type="submit"  action="cart.php" name="ViewCart" value="View Cart" style="width: 150px; height: 40px;"></input>
				 </form>
				
		</div>
		<div class="content">
			
			 <div class="php">
				
				<?php 
					$errors=0;
					include("DBConnect.php");
					if($errors ==0){
						$SQLstring = 'SELECT * FROM books INNER JOIN  Authors  WHERE Authors.author_id= books.author_id ';
						$QueryResult = mysql_query($SQLstring,$DBConnect);
						if($QueryResult !=0){
							while($Row = mysql_fetch_row($QueryResult)){
								
								echo '<div class="book">
										<div class="title">'.$Row[1].'</div>
										<div class="author">'.$Row[6].'</div>
										<div class="price">Price: '.$Row[4].'$</div>
										 <div class="year">Year:'.$Row[3].'</div>
										 <form method="post" action="addtocart.php"  >
										 	<input type="hidden" name="bookid" value="'.$Row[1].'">
										 	<input type="submit" style="width: 150px; height: 40px; float:right; margin-top: -60px " action="cart.php" name="Add to cart" value="Add to cart" ></input>
										 </form>
									</div>';
								
							}
						}
					}
				 ?>
			</div> 

		</div>
	</div>
	<div class="footer"></div>
</body>
</html>