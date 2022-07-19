<?php

$file = file('user.txt');

$username = "abc";

foreach ($file as $key => $row) {
    if (preg_match("/($username)/", $row)) {
        unset($file[$key]);

        file_put_contents("user.txt", trim(implode($file)));

        echo "Done";
    }
}
