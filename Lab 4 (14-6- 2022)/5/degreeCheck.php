<?php 
	session_start();

	$degree =$_POST['degree'];
	
	if($degree=='')
    {
		echo "Invalid Degree!";
	}
	else
	{
		echo "Valid Degree!";
	}
?>