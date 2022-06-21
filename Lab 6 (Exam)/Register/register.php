<head>
    <title>REGISTRATION</title>
</head>

<body>

    <form method="post" action="registerCheck.php" enctype="">
        <fieldset>
            <legend><b>REGISTRATION</b></legend>
            ID: <br><input type="text" name="id" value=""><br>
            Password: <br><input type="password" name="password" value=""><br>
            Confirm Password: <br><input type="password" name="confirmPassword" value=""><br>
            Name: <br><input type="text" name="name" value=""><br>
            User Type: <br>
            <hr>
            <input type="radio" name="userType" value="user">
            User
            <input type="radio" name="userType" value="admin">
            Admin
            <hr>


            <button type="submit" name="signup">Sign Up</button>
            <a href="../SignIn/signin.php">Sign In</a>
        </fieldset>
    </form>
</body>