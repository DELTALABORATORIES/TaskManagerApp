<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>DELTA</title>
    <link href="css/registration_form.css" rel="stylesheet" />
    <link rel="icon" href="images/Logos/DELTA_Network-normal.ico" type="image/x-icon">
</head>
<body>
    <div class="Main">
        <div class="SignInForm">
            <div class="SignUp">
                <img src="images/Logos/DELTA Network-normal.png" alt="" id="SignUpLogo" />
                <hr id="hrShort" />
                <hr id="hrMiddle" />
                <hr id="hrLong" />
                <p class="CreateAccount">
                    LET'S CREATE YOUR ACCOUNT
                </p>
                <div class="FormContainer">
                    <form action="register" method="post">
                        <input id="InputUsername" type="text" placeholder="      Full Name" name="signUpFullName"/>
                        <div style="margin-top:20px;">
                            <input class="SignUpInput" type="text" placeholder="      Username" name="signUpUsername"/>
                        </div>
                        <div style="margin-top:20px;">
                            <input class="SignUpInput" type="email" placeholder="      Mail" name="signUpEmail"/>
                        </div>
                        <div style="margin-top:20px;">
                            <input class="SignUpInput" type="password" placeholder="      Password" name="signUpPassword" id="password"/>
                        </div>
                        <div    style="margin-top:20px;">
                            <input class="SignUpInput" type="password" placeholder="      Repeat Password" name="signUpPasswordRepeat" id="passwordRepeat"/>
                            <p id="passwordMatch" style="color: white;margin: 0;font-size: 19px;visibility: hidden">Passwords do not match!</p>
                        </div>
                        <input id="SignUp" type="submit" value="Sign Up" formmethod="post" />
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                    </form>
                </div>
                <p class="Register">
                    Copyright © X Labs<br />
                </p>
            </div>
          </div>
        </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
        $('#passwordRepeat').bind('input' , function () {
            var password = $('#password').val();
            var passwordRepeat = $('#passwordRepeat').val();

            $.get("checklogin/checkpassword",
                {
                    password: password,
                    passwordRepeat: passwordRepeat
                },
                function (data) {
                if (data === 'true'){
                    $('#passwordMatch').css('visibility' , 'hidden');
                    $('#SignUp').removeAttr("disabled");
                }
                else {
                    $('#passwordMatch').css('visibility' , 'visible');
                    $('#SignUp').attr("disabled", "disabled");
                }

                });
        });
    </script>

</body>
</html>