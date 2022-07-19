<?php

if (isset($_COOKIE['status'])) {


?>

	<body align="center">
		You are already signed in!<br>
		Plese press to button below to navigate back to homepage!

		<br>
		<a href="home.php">Homepage</a>

	</body>



<?php

} else {

?>
	<html>

	<head>
		<title>username</title>
	</head>

	<body>
		<form method="post" action="loginCheck.php" enctype="">
			username: <input type="text" name="username" value=""><br>
			password: <input type="password" name="password" value=""><br>
			<input type="submit" name="submit" value="Submit">
			<a href="signup.html"> Signup </a>
		</form>
	</body>

	</html>

<?php
}
