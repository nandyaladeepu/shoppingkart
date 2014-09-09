<?php 
	$errors = 0; 
	include("DBConnect.php");
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($DBConnect !==FALSE){
		$SQLstring = "SELECT userId, FName, LName FROM user_accounts where Email='". $email."' and Password= 
		'". $_POST['password'] ."'";
		
		$Query_Result = mysql_query($SQLstring,$DBConnect);
		if(mysql_num_rows($Query_Result)===0	){
			echo "<p> The email address/password"."combination entered is not valid.</p>\n";
			++$errors;
		}
		else{
			$Row= mysql_fetch_assoc($Query_Result);
			$userID =$Row['userId'];
			$userName=$Row['FName']."".$Row['LName'];
			
			session_start();
			$_SESSION['email']= $email;
			$_SESSION['login']= true;
			header("Location: index.php");
		
		}
	}
	if($errors>0){
		echo " <p> Please click<button onclick='window.history.back()'>back</button> to the form and fix the errors indicated</p> ";

	}
	else{
	
	}
 ?>