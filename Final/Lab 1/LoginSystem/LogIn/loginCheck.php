<?php

require_once "../Model/userModel.php";

function printError($message)
{
    echo "
    <meta http-equiv = \"refresh\" content = \"1; url = ../../index.html\" />
        <h1 align=\"center\">
            <b>Redirecting you!</b>
        </h1>
    <script>
        alert(\"" . $message . "\");
    </script>";
}
// setcookie('loginStatus', 'true', time() + 3600, '/');
// header("location: ../homepage/homepage.php");

$username = strtolower($_POST['username']);
$password = $_POST['password'];
//echo $username;

if ($username == null || $password == null) {
    printError("The USERNAME or PASSWORD cannot be empty!");
} else {
    // $file = fopen('../../../DB/user.txt', 'r');

    // while (!feof($file)) {
    // $data = fgets($file);
    // $user = explode('|', $data);
    // if ($username == trim($user[0])) {

    //     if ($password == trim($user[2])) {
    //         setcookie('loginStatus', 'true', time() + 3600, '/');
    //         setcookie('userType', trim($user[8]), time() + 3600, '/');
    //         setcookie('username', $username, time() + 3600, '/');
    //         header('location: ../homepage/homepage.php');
    //     }
    //     break;
    // }

    $status = login($username, $password);

    if ($status) {
        setcookie('loginStatus', 'true', time() + 3600, '/');
        setcookie('userType', trim($user[8]), time() + 3600, '/');
        setcookie('username', $username, time() + 3600, '/');
        header('location: ../homepage/homepage.php');
    }
    printError("Username or Password Incorrect!");
}
