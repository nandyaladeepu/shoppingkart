<?php 
	$DBName = "shopping_cart";
	$DBConnect = @mysql_connect("localhost","root","krishna");
	if ($DBConnect===FALSE) 
		echo "<p> Connnection error:". mysql_error() . "</p>\n";
	else
	{
		if (@mysql_select_db($DBName, $DBConnect) === FALSE) {
			echo "<p> Could not select the \" $DBName\"". "database:" . mysql_error($DBConnect) . "</p>\n";
			mysql_close($DBConnect);
			$DBConnect = FALSE;
		}
		else{
			echo "<script>console.log('db connect successful')</script>";
		}


	}
?>