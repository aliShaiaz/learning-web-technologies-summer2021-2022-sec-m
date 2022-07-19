<?php
function registerPage()
{ ?>
    <html>

    <head>
        <title>Registration Page</title>
    </head>

    <body>
        <div>
            <fieldset style="float:left">
                <legend>Registration</legend>
                <!-- Are you an <a href="investorReg.php">Investor</a>? Or looking to raise <a href="organizationReg.php">Fund</a>? -->
                <form method="POST" action="regForm.php">
                    Do you want to register as <input type="submit" name="personal" value="Investor">?<br>
                </form>
                <form method="POST" action="">
                    Or do you want to raise <input type="submit" name="fund" value="Fund">?
                </form>
            </fieldset>
        </div>
    </body>

    </html>



<?php }

function nextRegisterPage()
{ ?>
    <html>

    <head>
        <title>Registration Page</title>
    </head>

    <body>
        <div>
            <fieldset style="float:left">
                <legend>Registration</legend>
                <!-- Are you an <a href="investorReg.php">Investor</a>? Or looking to raise <a href="organizationReg.php">Fund</a>? -->
                <form method="POST" action="regForm.php">
                    Register as <input type="submit" name="org" value="Organization">?<br>
                </form>
                <form method="POST" action="regForm.php">
                    Or register as <input type="submit" name="personal" value="Individual">?
                </form>
            </fieldset>
        </div>
    </body>

    </html>
<?php }

function displayError()
{ ?>
    <html>

    <head>
        <title>Error!</title>
    </head>

    <body>
        <u><b>You are already logged in!</b></u>
        <form action="../homepage/homepage.php">
            <button>Home</button>
        </form>
    </body>

    </html>
<?php }


// ... Main Function ... //
if (!isset($_COOKIE['loginStatus'])) {
    if (isset($_POST['fund'])) {
        nextRegisterPage();
    } else {
        registerPage();
    }
} else {
    displayError();
}
// ... //
