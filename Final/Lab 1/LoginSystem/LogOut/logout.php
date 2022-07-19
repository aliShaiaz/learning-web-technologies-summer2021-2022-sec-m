<?php
setcookie('loginStatus', 'false', time() - 100, '/');
setcookie('username', '', time() - 100, '/');
setcookie('userType', '', time() - 100, '/');

session_start();
session_unset();
session_destroy();


header("location: ../../index.html");
