<?php

if (isset($_POST['update'])) {

	$username = strtolower($_POST['username']);
	$password = $_POST['password'];
	$email = $_POST['email'];

	if ($username == null || $password == null || $email == null) {
		echo "null username/password/email";
	} else {

		$user = "\r\n".$username . "|" . $password . "|" . $email;
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		header('location: listUsers.php');
	}
} else {

	echo "ERROR!!!";

	session_start();

	$username = strtolower($_POST['username']);
	$password = $_POST['password'];
	$email = $_POST['email'];

	if ($username == null || $password == null || $email == null) {
		echo "null username/password/email";
	} else {

		$user = $username . "|" . $password . "|" . $email . "\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		header('location: login.php');
	}
}

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/
