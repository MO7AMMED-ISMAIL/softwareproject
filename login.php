<?php 

	

	$username=$_POST['username'];
	$password=$_POST['password'];

	include "conect.php";

	$loginSelect="SELECT * FROM users WHERE username='$username' AND passwrod = '$password' ";

	$query = $conn ->query($loginSelect);
    
	$user = $query -> fetch_assoc();
	if($query -> num_rows > 0){
		header("location: main.php");
	}else{

  			header("location: login-form-20/index.php");
  			include "myscript";
	}

 ?>