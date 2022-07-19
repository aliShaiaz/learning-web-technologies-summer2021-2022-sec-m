<?php

function invReg()            // ... Investor's Registration Form
{ ?>
    <html>

    <head>
        <title>Investor's Registration</title>
        <script>
            function empty() {
                var x;

                // Username Check
                x = document.getElementById("username").value;
                if (x == "") {
                    alert("Enter a Valid Username.");
                    return false;
                };

                // Firstname Check
                x = document.getElementById("firstName").value;
                if (x == "") {
                    alert("Enter a Valid First Name.");

                    return false;
                };

                // Lastname Check
                x = document.getElementById("lastName").value;
                if (x == "") {
                    alert("Enter a Valid Last Name.");
                    return false;
                };

                // Password Check
                pass = document.getElementById('password').value;
                cPass = document.getElementById('confirmPassword').value;
                if (pass == "" || cPass == "") {
                    alert("Please enter your Password!");
                    return false;
                } else if (cPass != pass) {
                    alert("Your passwords do not match!");
                    return false;
                }

                // Date of Birt Check (whether 18+ or not)
                date = document.getElementById('dob').value.trim();
                dob = Date.parse(date);
                today = Date.parse(Date());
                diff = today - dob;
                if (diff < 567648000000) { // 567648000000 is 18 yrs in milisec.
                    alert("You have to be an adult to register!");
                    return false;
                } else if (date == "") {
                    alert("Please Enter Date of Birth!");
                    return false;
                }

                // Gender Check
                x = document.getElementById("gender").value;
                if (x == "") {
                    alert("Please select your Gender.");
                    return false;
                };

                // Address Check
                x = document.getElementById("address").value;
                if (x == "") {
                    alert("Enter a valid Address.");
                    return false;
                };

                // NID Check
                x = document.getElementById("nid").value;
                if (x == "") {
                    alert("Enter a valid NID Number.");
                    return false;
                };
            }
        </script>

    </head>

    <body>

        <form method="post" action="regChecker.php" enctype="">

            <fieldset style="float:inline-start">
                <legend>Investor Registration</legend>
                <table>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input id="username" type="text" name="username" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            First Name:
                        </td>
                        <td>
                            <input id="firstName" type="text" name="firstName" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name:
                        </td>
                        <td>
                            <input id="lastName" type="text" name="lastName" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input id="password" type="password" name="password" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input id="confirmPassword" type="password" name="confirmPassword" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input id="email" type="email" name="email" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                            <input id="dob" type="date" name="dob" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gender:
                        </td>
                        <td>
                            <select id="gender" name="gender">
                                <option value="">Choose Your Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <input id="address" type="text" name="address" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            NID:
                        </td>
                        <td>
                            <input id="nid" type="text" name="nid" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contact Number:
                        </td>
                        <td>
                            <input id="phone" type="tel" name="phone" pattern="[0][1][3-9][0-9]{8}" placeholder="01XXXXXXXXX" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <hr>
                            <input type="submit" onclick="return empty()">
                        </td>
                    </tr>
                </table>
            </fieldset>

            <input type="hidden" name="userType" value="investor">

        </form>
    </body>

    </html>
<?php }

function indivReg()          // ... Investor's Registration Form
{ ?>
    <html>

    <head>
        <title>Individual's Registration</title>
        <script>
            function empty() {
                var x;

                // Username Check
                x = document.getElementById("username").value;
                if (x == "") {
                    alert("Enter a Valid Username.");
                    return false;
                };

                // Firstname Check
                x = document.getElementById("firstName").value;
                if (x == "") {
                    alert("Enter a Valid First Name.");

                    return false;
                };

                // Lastname Check
                x = document.getElementById("lastName").value;
                if (x == "") {
                    alert("Enter a Valid Last Name.");
                    return false;
                };

                // Password Check
                pass = document.getElementById('password').value;
                cPass = document.getElementById('confirmPassword').value;
                if (pass == "" || cPass == "") {
                    alert("Please enter your Password!");
                    return false;
                } else if (cPass != pass) {
                    alert("Your passwords do not match!");
                    return false;
                }

                // Date of Birt Check (whether 18+ or not)
                date = document.getElementById('dob').value.trim();
                dob = Date.parse(date);
                today = Date.parse(Date());
                diff = today - dob;
                if (diff < 567648000000) { // 567648000000 is 18 yrs in milisec.
                    alert("You have to be an adult to register!");
                    return false;
                } else if (date == "") {
                    alert("Please Enter Date of Birth!");
                    return false;
                }

                // Gender Check
                x = document.getElementById("gender").value;
                if (x == "") {
                    alert("Please select your Gender.");
                    return false;
                };

                // Address Check
                x = document.getElementById("address").value;
                if (x == "") {
                    alert("Enter a valid Address.");
                    return false;
                };

                // NID Check
                x = document.getElementById("nid").value;
                if (x == "") {
                    alert("Enter a valid NID Number.");
                    return false;
                };
            }
        </script>

    </head>

    <body>

        <form method="post" action="regChecker.php" enctype="">

            <fieldset style="float:inline-start">
                <legend>Investor Registration</legend>
                <table>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input id="username" type="text" name="username" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            First Name:
                        </td>
                        <td>
                            <input id="firstName" type="text" name="firstName" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last Name:
                        </td>
                        <td>
                            <input id="lastName" type="text" name="lastName" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input id="password" type="password" name="password" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input id="confirmPassword" type="password" name="confirmPassword" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input id="email" type="email" name="email" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date of Birth:
                        </td>
                        <td>
                            <input id="dob" type="date" name="dob" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gender:
                        </td>
                        <td>
                            <select id="gender" name="gender">
                                <option value="">Choose Your Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <input id="address" type="text" name="address" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            NID:
                        </td>
                        <td>
                            <input id="nid" type="text" name="nid" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contact Number:
                        </td>
                        <td>
                            <input id="phone" type="tel" name="phone" pattern="[0][1][3-9][0-9]{8}" placeholder="01XXXXXXXXX" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <hr>
                            <input type="submit" onclick="return empty()">
                        </td>
                    </tr>
                </table>
            </fieldset>

            <input type="hidden" name="userType" value="individual">

        </form>
    </body>

    </html>
<?php }

function orgReg()            // ... Organization's Registration Form
{ ?>

    <head>
        <title>Under Development</title>
    </head>

    <body>
        <div>
            <fieldse align="center">
                <h1>Organization Registration Page</h1>
                <p>(Under Development)</p>
            </fieldset>
        </div>
    </body>
<?php }

function displayError()       // ... Display Error Msg
{ ?>
    <center>
        <u><b>You are already logged in!</b></u>
        <!-- <form action="../homepage/homepage.php">
            <button>Home</button>
        </form> -->
        <input type="button" onclick="location.href='../homepage/homepage.php'" value="Go to Homepage" />

    </center>
<?php }

if (!isset($_COOKIE['loginStatus'])) {
    if (isset($_POST['personal'])) {
        if ($_POST['personal'] == "Investor") {
            invReg();
        } elseif ($_POST['personal'] == "Individual") {
            indivReg();
        }
    } elseif (isset($_POST['org'])) {
        orgReg();
    }
} else {
    displayError();
}
