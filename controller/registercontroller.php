<?php
	if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) )
	{	
		$name=trim(mysqli_real_escape_string($_POST['name']));
		$email=trim(mysqli_real_escape_string($_POST['email']));
		$password=trim(mysqli_real_escape_string(md5($_POST['password'])));
		include('../php/connect.php');

		$query=mysqli_query($conn,"INSERT INTO register_user(name,email,password) VALUES ('$name','$email','$password')");
	}
	else{
		header("location:register.php");
	}
?>