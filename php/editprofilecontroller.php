<?php 
require("connect.php");

$editid=$_SESSION['u_id'];

	if(  !empty($_POST['fname']) && !empty($_POST['lname']) && (!empty($_POST['fn']) || !empty($_POST['mn'])) && !empty($_POST['gender']) && !empty($_POST['dob']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['address']) && !empty($_POST['pin']) && !empty($_POST['identity']) && !empty($_POST['occupation']) && !empty($_POST['qualification']) && !empty($_POST['specialization']) )
	{
		
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$mname = mysqli_real_escape_string($conn, $_POST['mname']);
		$lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$fn = mysqli_real_escape_string($conn, $_POST['fn']);
		$mn = mysqli_real_escape_string($conn, $_POST['mn']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$dob= mysqli_real_escape_string($conn, $_POST['dob']);
		$email 	= mysqli_real_escape_string($conn, $_POST['email']);
		$contact 	= mysqli_real_escape_string($conn, $_POST['contact']);
		$altcontact= mysqli_real_escape_string($conn, $_POST['altcontact']);
		$address 	= mysqli_real_escape_string($conn, $_POST['address']);
		$pin= mysqli_real_escape_string($conn, $_POST['pin']);
		$identity= mysqli_real_escape_string($conn, $_POST['identity']);
		$occupation= mysqli_real_escape_string($conn, $_POST['occupation']);
		$qualification= mysqli_real_escape_string($conn, $_POST['qualification']);
		$specialization= mysqli_real_escape_string($conn, $_POST['specialization']);

		$query = "UPDATE trainuserprof SET fname='$fname',mname='$mname',lname='$lname',fn='$fn',mn='$mn',gender='$gender',dob='$dob',email='$email',contact='$contact',altcontact='$altcontact',address='$address',pin='$pin',identity='$identity',occupation='$occupation',qualification='$qualification',specialization='specialization' WHERE ID=$editid";
		if($conn->query($query))
		{
			echo "User Data Updated Succesfully";
			header("location:../profile/index.php");
		}
		else 
		{
			echo "Sorry,Something went wrong!";;
		}                        	
	}
	else
	{
		if(empty($_POST['fname']))
		{
			echo "First Name Cannot Be Empty<br>";
		}
		if(empty($_POST['lname']))
		{
			echo "Last Name Cannot Be Empty<br>";
		}
		if(empty($_POST['fn']) || empty($_POST['mn']))
		{
			echo "Parent's Name Cannot Be Empty<br>";
		}
		if(empty($_POST['gender']))
		{
			echo "Gender Cannot Be Empty<br>";
		}
		if(empty($_POST['dob']))
		{
			echo "Date Of Birth Cannot Be Empty<br>";
		}
		if(empty($_POST['email']))
		{
			echo "Email Cannot Be Empty<br>";
		}
		if(empty($_POST['contact']))
		{
			echo "Contact Cannot Be Empty<br>";
		}
		if(empty($_POST['address']))
		{
			echo "Address Cannot Be Empty<br>";
		}
		if(empty($_POST['pin']))
		{
			echo "Pin Cannot Be Empty<br>";
		}	
		if(empty($_POST['identity']))
		{
			echo "Identity Cannot Be Empty<br>";
		}
		if(empty($_POST['occupation']))
		{
			echo "Occupation Cannot Be Empty<br>";
		}
		if(empty($_POST['qualification']))
		{
			echo "Qualification Cannot Be Empty<br>";
		}
		if(empty($_POST['specialization']))
		{
			echo "Specialization Cannot Be Empty<br>";
		}
		exit;	
	}
?>