<?php

function validateUser($type)            // ... Server-End User Info Validation
{
    if ($type == "personal") {
        // Username Check
        if ($_POST['username'] == "") {
            return false;
        }
        // * //


        // Firstname Check
        if ($_POST['firstName'] == "") {
            return false;
        }
        // * //


        // Lastname Check
        if ($_POST['lastName'] == "") {
            return false;
        };
        // * //


        // Password Check
        if ($_POST['password'] == "" || $_POST['confirmPassword'] == "" || $_POST['password'] != $_POST['confirmPassword']) {
            return false;
        }
        // * //


        // Date of Birt Check (whether 18+ or not)
        $date = strtotime($_POST['dob']);             // The age to be over, over +18
        $min = strtotime('+18 years', $date);         // Time ($date) + 18 years
        if ($_POST['dob'] == "") {
            return false;
        } else if (time() < $min) {
            return false;
        }
        // * //


        // Gender Check
        if ($_POST['gender'] == "") {
            return false;
        };
        // * // 


        // Address Check
        if ($_POST['address'] == "") {
            return false;
        };
        // * //


        // NID Check
        if ($_POST['nid'] == "") {
            return false;
        };
        // * //
        return true;
    } elseif ($type == "organization") {
    }
}

function createUser($type)              // ... Creating User in DB
{

    if ($type == "personal") {

        // ... Username CrossMatch with DB ... //
        $file = fopen('../../../db/user.txt', 'r');
        while (!feof($file)) {
            $data = fgets($file);
            $user = explode('|', $data);
            if ($_POST['username'] == trim($user[0])) {
                echo "<center>
                    USERNAME not available. Please try again with different USERNAME.<br>
                    <a href=\"investorReg.php\">Registration Page</a>
                </center>";
                return 0;
            }
        }
        fclose($file);
        // ... ... //


        // ... Email CrossMatch with DB ... //
        // ... //


        // ... Phone Number CrossMatch with DB ... //

        // ... //


        // Data Retrieval From $_POST //
        $username = strtolower($_POST['username']);
        $name = $_POST['firstName'] . " " . $_POST['lastName'];
        $password = $_POST['password'];
        //$confirmPassword = $_POST['confirmPassword'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $nid = $_POST['nid'];
        $userType = $_POST['userType'];
        $phone = $_POST['phone'];
        // .. //


        // ... Insertion of user data to DB ... //
        $file = fopen('../../../db/user.txt', 'a');
        $user = $username . "|" . $name . "|" . $password . "|" . $email . "|" . $dob . "|" . $gender . "|" . $address . "|" . $nid  . "|" . $userType . "|" . $phone . "\r\n";
        fwrite($file, $user);
        // ... //

    } elseif ($type == "organization") {
    }
}

function displayError()                 // ... Display Error Msg
{ ?>

    <html>

    <head>
        <title>Error Message!</title>
        <script>
            alert("Something went wrong when trying to insert you data on our server.")
        </script>
    </head>

    <body>
        Please try again!
        <br>
        <a href="register.php">Retry</a>
    </body>

    </html>

    </html>

<?php }



if (isset($_POST['update'])) {
    if (($_POST['userType'] == "investor" || $_POST['userType'] == "individual") && validateUser("personal")) {
        createUser("personal");
        header('location: ../../admin/listusers.php');
    } elseif ($_POST['userType'] == "organization" && validateUser("organization")) {
        createUser("organization");
        header('location: ../../admin/listusers.php');
    } else {
        displayError();
    }
} else {
    if (($_POST['userType'] == "investor" || $_POST['userType'] == "individual") && validateUser("personal")) {
        createUser("personal");
        header('location: ../login/login.php');
    } elseif ($_POST['userType'] == "organization" && validateUser("organization")) {
        createUser("organization");
        header('location: ../login/login.php');
    } else {
        displayError();
    }
}
