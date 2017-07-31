<?php
	if(isset($_POST['email']) && isset($_POST['password']) )
	{
		include('../php/connect.php');
		
		$email=trim(mysqli_real_escape_string($conn,$_POST['email']));
		$password=trim(mysqli_real_escape_string($conn,md5($_POST['password'])));
		$query=mysqli_query($conn,"SELECT email,password FROM register_user WHERE email='$email' AND password='$password' ");

		if(mysqli_num_rows($query)==1)
			{echo "You have successfuly logged in.";}
		else
			{echo "Sorry, wrong credentials";}
	}
	else
	{
		header("location:login.php");
	}
?>