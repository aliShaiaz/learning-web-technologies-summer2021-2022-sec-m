<?php 
	session_start();

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$number = '0123456789';
	
	if($firstName == null || similar_text($firstName, $number) || str_contains($firstName, ' ') || $lastName == null || similar_text($lastName, $number) || str_contains($lastName, ' '))
    {
		echo "Invalid Name!";
	}
	else
	{
		echo "Valid Name!";
	}
?>