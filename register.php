<?php 
	$email="";$errors = 0; $registered = 0;
	$email = $_POST['email'];
	$password = $_POST['password'];
	include("DBConnect.php");
	$TableName= "user_accounts";
	if($errors ==0){
		$SQLstring = 'SELECT count(*) FROM '. $TableName .' where Email ="'. $email.'"';
		$QueryResult = mysql_query($SQLstring,$DBConnect);
		if($QueryResult !=0){
			$Row = mysql_fetch_row($QueryResult);
			if($Row[0]>0){
				echo "<p> The email address entered $email is already registered .</p>";
				++$registered;
			}
		}
	}
	if($errors>0){
		echo "<p>Please use your browsers back button to return to the form and fix the errors indicated.</p>\n";
	}
	if($registered ==0 && $errors ==0){
		$first = $_POST['first'];
		$last = $_POST['last'];
		$SQLstring = "INSERT INTO $TableName (FName,LName,Email,Password) VALUES('$first','$last','$email','$password')";
		$QueryResult = @mysql_query($SQLstring,$DBConnect);
		$clientID = mysql_insert_id($DBConnect);
		mysql_close($DBConnect);
		$userName= $first."".$last;
		header("Location:  index.php");
	}

 ?>