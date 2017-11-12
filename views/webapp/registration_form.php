<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>DELTA</title>
    <link href="css/registration_form.css" rel="stylesheet" />
    <link rel="icon" href="Images/Logos/DELTA_Network-normal.ico" type="image/x-icon">
</head>
<body>
    <div class="Main">
        <div class="SignInForm">
            <div class="SignUp">
                <img src="assests/images/Logos/DELTA Network-normal.png" alt="" id="SignUpLogo" />
                <hr id="hrShort" />
                <hr id="hrMiddle" />
                <hr id="hrLong" />
                <p class="CreateAccount">
                    LET'S CREATE YOUR ACCOUNT
                </p>
                <div class="FormContainer">
                    <form action="PHP/SignUp.php" method="post">
                        <input id="InputUsername" type="text" placeholder="      First Name" name="logUpName"/>
                        <div style="margin-top:20px;">
                            <input class="SignUpInput" type="text" placeholder="      Last Name" name="logUpLastName"/>
                        </div>
                        <div style="margin-top:20px;">
                            <input class="SignUpInput" type="email" placeholder="      Mail" name="logUpEmail"/>
                        </div>
                        <div style="margin-top:20px;">
                            <input class="SignUpInput" type="password" placeholder="      Password" name="logUpPassword"/>
                        </div>
                        <div    style="margin-top:20px;">
                            <input class="SignUpInput" type="password" placeholder="      Repeat Password" name="logUpPassword"/>
                        </div>
                        <input id="SignUp" type="submit" value="Sign Up" formmethod="post" />
                    </form>
                </div>
                <p class="Register">
                    Copyright © Delta Labs<br />
                </p>
            </div>
          </div>
        </div>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>