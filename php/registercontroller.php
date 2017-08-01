<?php
	echo "here1";
	if( isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['password']) )
	{	
		include('../php/connect.php');
		$name=trim(mysqli_real_escape_string($conn,$_POST['fname']));
		$email=trim(mysqli_real_escape_string($conn,$_POST['email']));
		$password=trim(mysqli_real_escape_string($conn,md5($_POST['password'])));
		$query=mysqli_query($conn,"INSERT INTO trainuserprof(fname,email,password) VALUES ('$name','$email','$password')");
		echo "here2";
		echo $query;
	}
	else{
		header("location:register.php");
	}
?>