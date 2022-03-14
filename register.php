<?php 
		
	$username =$_POST['username'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	$phone =$_POST['phone'];
	$adress =$_POST['adress'];
	
	require_once 'conect.php';
	$insert = "INSERT INTO users ( username,email,passwrod,phone,adress)
				VALUES('$username','$email','$password','$phone','$adress')";


	$query = $conn ->query($insert);
	if ($query) {
		header("location: login-form-20/index.php");
	}
	else{
		echo $conn -> error;
	}
 


 ?>