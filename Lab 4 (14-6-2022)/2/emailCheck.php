<?php 
	session_start();

	$email = $_POST['email'];
	
	if($email=='')
    {
		echo "Invalid Email!";
	}
	else
	{
		echo "Valid Email!";
	}
?>