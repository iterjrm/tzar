<?php

	$conn=new mysqli("localhost","jrm","sikujyoti753","training_user_jrm");

	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	} 

  ?>