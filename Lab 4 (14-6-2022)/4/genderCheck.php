<?php 
	session_start();

	$gender =$_POST['gender'];
		
	if($gender[0]=='')
    {
		echo "Invalid Gender!";
	}
	else
	{
		echo "Valid Gender!";
	}
?>