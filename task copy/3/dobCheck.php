<?php 
	session_start();

	$dob = $_POST['dob'];
	$today = date("Y-m-d");
	
	if($dob=='' || $dob >= $today)
    {
		echo "Invalid Date!";
	}
	else
	{
		echo "Valid Date!";
	}
?>