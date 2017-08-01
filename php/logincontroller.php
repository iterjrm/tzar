<?php

	session_start()
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		include('../php/connect.php');
		
		$email=trim(mysqli_real_escape_string($conn,$_POST['email']));
		$password=trim(mysqli_real_escape_string($conn,md5($_POST['password'])));
		$query=mysqli_query($conn,"SELECT email,password FROM register_user WHERE email='$email' AND password='$password' ");
		$result = mysqli_fetch_assoc($query);


		if(mysqli_num_rows($query)==1)
			{echo "You have successfuly logged in.";}
			$_SESSION['u_id']=$result['trainuserprof_id'];
			$_SESSION['u_fname']=$result['trainuserprof_fname'];
			$_SESSION['u_lname']=$result['trainuserprof_lname'];
			$_SESSION['u_fn']=$result['trainuserprof_fn'];
			$_SESSION['u_mn']=$result['trainuserprof_mn'];
			$_SESSION['u_gender']=$result['trainuserprof_gender'];
			$_SESSION['u_dob']=$result['trainuserprof_dob'];
			$_SESSION['u_email']=$result['trainuserprof_email'];
			$_SESSION['u_contact']=$result['trainuserprof_contact'];
			$_SESSION['u_altcontact']=$result['trainuserprof_altcontact'];
			$_SESSION['u_address']=$result['trainuserprof_address'];
			$_SESSION['u_pin']=$result['trainuserprof_pin'];
			$_SESSION['u_id']=$result['trainuserprof_identity'];
			$_SESSION['u_occupation']=$result['trainuserprof_occupation'];
			$_SESSION['u_qualification']=$result['trainuserprof_qualification'];
			$_SESSION['u_specialization']=$result['trainuserprof_specialization'];
			$_SESSION['timestamp']=time();
			header('Location: ../register/index.php');	

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