<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

	<html>

	<head>
		<title>Home</title>
	</head>

	<body align="center">
		<h1>Welcome home, <?php echo $_COOKIE['user'] ?>!</h1>
		<a href="logout.php">Logout</a>

		<?php

		if ($_COOKIE['user'] == "shaiaz") {
		?>
			<br>
			<a href="listUsers.php">List Users</a>

		<?php
		}
		?>

	</body>

	</html>


<?php
} else {
	echo "<center>Login Expired!!<br>Please Login Again!<br>
	<a href=\"login.php\">Login</a>
	</center>";
}
?>