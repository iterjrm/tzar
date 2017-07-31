<?php
	if(isset($_POST['email']) && isset($_POST['password']) )
	{
		include('../php/connect.php');
		
		$email=trim(mysqli_real_escape_string($conn,$_POST['email']));
		$password=trim(mysqli_real_escape_string($conn,md5($_POST['password'])));

		$query=mysqli_query($conn,"SELECT password FROM register_user WHERE email=$email ");

		if(mysqli_num_rows($conn)==1)
		{
			$result=mysqli_fetch_assoc($result);
			if($password==$result['password'])
			{
				echo "Success Log In";
			}
			else
			{
				echo "Error Log In";	
			}
		}
		else
		{
			echo "Something Went Wrong!!!";	
		}
	}
	else
	{
		header("location:login.php");
	}

?>