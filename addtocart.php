<?php 
	include("DBConnect.php");
	$errors = 0; $registered = 0;
	if($registered ==0 && $errors ==0){
		$book = $_POST["bookid"];
		session_start();
		if (isset($_SESSION['Cart'])){
		array_push($_SESSION['Cart'], $book);
		print_r($_SESSION['Cart']);
			
		}
		else{
			
		$_SESSION['Cart']= array();
		}
			
		
	


		
	header("Location:  index.php");
	}
 ?>