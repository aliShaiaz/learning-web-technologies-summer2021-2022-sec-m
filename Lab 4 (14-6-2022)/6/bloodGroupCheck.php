<?php 
	session_start();

	$degree =$_POST['degree'];
	echo $degree[0];
	
	if($degree=='')
    {
		echo "Invalid Degree!";
	}
	else
	{
		echo "Valid Degree!";
	}
?>