<?php

function displaySigninPage()
{ ?>
    <html>

    <head>
        <title>Signin Page</title>
    </head>
    <script>
        function empty() {
            var x;

            // Username Check
            x = document.getElementById("username").value;
            if (x == "") {
                alert("Enter a Valid Username.");
                return false;
            };


            // Password Check
            pass = document.getElementById('password').value;
            if (pass == "") {
                alert("Please enter your Password!");
                return false;
            }
        }
    </script>

    <body>
        <div style="float:left">
            <fieldset>
                <legend>Signin</legend>
                <form method="post" action="loginCheck.php" enctype="">
                    <table>
                        <tr>
                            <td>Username:</td>
                            <td><input id="username" type="text" name="username" value=""></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input id="password" type="password" name="password" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="" onclick="return empty()">
                            </td>
                        </tr>
                    </table>
                </form>
                <hr>
                <center>
                    Forgot Username or Password? <br>
                    <button>Recover ID</button>
                </center>
            </fieldset>
        </div>



    </body>

    </html>


<?php }

if (!isset($_COOKIE['loginStatus'])) {
    displaySigninPage();
} else {
    echo "
        <meta http-equiv = \"refresh\" content = \"2; url = ../homepage/homepage.php\" />
            <h1 align=\"center\">
                <b>Redirecting you to your Homepage!</b>
            </h1>
        <script>
            alert(\"You are already signed in! You will be redirected to homepage shortly!\");
        </script>";
}
