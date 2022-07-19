<?php

function deleteUser($username)
{
    $file = file('user.txt');
    foreach ($file as $key => $row) {
        if (preg_match("/($username)/", $row)) {
            unset($file[$key]);
            file_put_contents("user.txt", trim(implode($file)));
        }
    }
}

function addUser($username, $password, $email)
{
?>

    <body>
        <form method="post" action="regCheck.php" enctype="">
            Username: <input type="text" name="username" value="<?php echo $username ?>" placeholder="<?php echo $username ?>"><br>
            Password: <input type="password" name="password" value="<?php echo $password ?>"><br>
            Email: <input type="email" name="email" value="<?php echo $email ?>" placeholder="<?php echo $email ?>"><br>
            <button type="submit" name="update" value="update">Update</button>
        </form>
    </body>

<?php


}


if ((isset($_COOKIE['user']) && $_COOKIE['user'] == "shaiaz") && (strcasecmp($_COOKIE['user'], "shaiaz") == 0)) {

    if (isset($_POST['update'])) {
        $file = fopen('user.txt', 'r');
        $username = $_POST['update'];

        while (!feof($file)) {
            $data = fgets($file);
            $user = explode('|', $data);
            if ($username == trim($user[0])) {
                deleteUser($username);
                addUser($username, $user[1], $user[2]);
            }
        }
    } else if (isset($_POST['delete'])) {
        deleteUser($_POST['delete']);
        header("Location: listUsers.php");
    }
} else header("location: home.php");