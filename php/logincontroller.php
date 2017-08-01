<?php

	
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		include('../php/connect.php');
		
		$email=trim(mysqli_real_escape_string($conn,$_POST['email']));
		$password=trim(mysqli_real_escape_string($conn,md5($_POST['password'])));
		$query=mysqli_query($conn,"SELECT email,password FROM trainuserprof WHERE email='$email' AND password='$password' ");
		$result = mysqli_fetch_assoc($query);

		echo $password;
		echo $email;
		echo $result['email'];
		echo $result['password'];





		if(mysqli_num_rows($result)==1)
		{	
			session_start();
			$_SESSION['u_id']=$result['id'];
			$_SESSION['u_fname']=$result['fname'];
			$_SESSION['u_lname']=$result['lname'];
			$_SESSION['u_fn']=$result['fn'];
			$_SESSION['u_mn']=$result['mn'];
			$_SESSION['u_gender']=$result['gender'];
			$_SESSION['u_dob']=$result['dob'];
			$_SESSION['u_email']=$result['email'];
			$_SESSION['u_contact']=$result['contact'];
			$_SESSION['u_altcontact']=$result['altcontact'];
			$_SESSION['u_address']=$result['address'];
			$_SESSION['u_pin']=$result['pin'];
			$_SESSION['u_id']=$result['identity'];
			$_SESSION['u_occupation']=$result['occupation'];
			$_SESSION['u_qualification']=$result['qualification'];
			$_SESSION['u_specialization']=$result['specialization'];
			$_SESSION['timestamp']=time();
			header('Location: ../profile/index');	
		}

		else
		{
			echo "Sorry, wrong credentials";
			exit();
		}
	}
	else
	{
		header("location:login.php");
	}
?>