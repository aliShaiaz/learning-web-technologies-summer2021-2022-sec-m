<?php

$userid = $_POST['userid'];
$password = $_POST['password'];

if ($userid == null || $password == null) {
    echo "null userid/password";
} else {
    $file = fopen('../user.txt', 'r');

    while (!feof($file)) {
        $data = fgets($file);
        $user = explode('|', $data);
        if ($userid == trim($user[0]) && $password == trim($user[1])) {
            setcookie('status', 'true', time() + 3600, '/');
            if ($user[3] == "admin") {
                setcookie('admin', 'true', time() + 3600, '/');
            }else if ($user[3]=="user")
            {
                setcookie('user', 'true', time() + 3600, '/');

            }
            header('location: ../home/home.php');
        }
    }
    echo "invalid user";
}
