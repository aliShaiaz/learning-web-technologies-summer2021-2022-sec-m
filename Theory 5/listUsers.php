<?php

if (isset($_COOKIE['user']) && (strcasecmp($_COOKIE['user'], "shaiaz") == 0)) {

    $file = fopen('user.txt', 'r');

?>

    <center>
        <form method="post" action="updateFile.php">
            <fieldset>
                <legend>Users</legend>
                <table border="1">
                    <tr align="center">
                        <td><b>USERNAME</b></td>
                        <td><b>EMAIL</b></td>
                        <td><b>ACTION</b></td>
                    </tr>
                    <?php
                    while (!feof($file)) {
                        $user = explode('|', fgets($file));
                    ?>
                        <tr align="center">
                            <td><?php echo trim($user[0]) ?></td>
                            <td><?php echo trim($user[2]) ?></td>
                            <td>
                                <button type="submit" name="update" value=<?php echo trim($user[0]) ?>>Update</button>
                                <button type="submit" name="delete" value=<?php echo trim($user[0]) ?>>Delete</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </fieldset>
        </form>
        <a href="home.php">Back</a>
    </center>

<?php
} else {
    header("Location: home.php");
}
