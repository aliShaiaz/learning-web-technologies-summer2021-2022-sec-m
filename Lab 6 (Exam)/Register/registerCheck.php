<?php

if (isset($_POST['signup'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $name = $_POST['name'];
    $userType = $_POST['userType'];

    // echo "$id <br>$password <br>$confirmPassword <br>$name <br>$userType <br>";
    if ($id == null || $name == null || $userType == null) {
        echo "Cannot Be Empty Fields!<br>";
        echo "<a href=\"register.php\">Back</a>";
    } else if ($password != $confirmPassword || $password == "") {
        echo "Username & Password Do Not Match or They Are Blank!!<br>";
        echo "<a href=\"register.php\">Back</a>";
    } else {
        $file = fopen('../user.txt', 'a');
        $user = $id . "|" . $password . "|" . $name . "|" . $userType . "\r\n";

        fwrite($file, $user);


        header('location: ../signin/signin.php');
    }
} else {
    header("location: ../SignIn/signin.php");
}
