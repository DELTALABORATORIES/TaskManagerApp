﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Sign IN | DELTA</title>
    <link href="../../css/Login_Page.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Anton|Fresca|Indie+Flower|Montserrat|Poppins" rel="stylesheet">
    <link rel="icon" href="../../images/Logos/DELTA_Network-normal.ico" type="image/x-icon">
</head>
<body>
   <div class="Main">
       <div class="AboutUs">
           <p class="WelcomeText">
               WELCOME TO DELTA <br><br> "Note-taking for developer"
           </p>
           <p class="Description">
               "Your markdown notes are saved automatically as you write and various formatting options have semi-live previews so you can double check what you’re writing. Text is formatted as you type.

               For code snippets the app is able to highlight code syntax in more than 100 languages, including Javascript, Python, HTML and CSS and you can store multiple code snippets within the same snippet."</p>
       </div>
       <div class="SignInForm">
           <div class="SignIn">
               <img src="../../mages/Logos/DELTA Network-normal.png" alt="" id="SignInLogo" />
               <hr id="hrLong"/>
               <hr id="hrShort"/>
               <div class="FormContainer">
                   <form action="PHP/SignIn.php" method="post">
                       <input id="InputUsername" type="text" placeholder="      E-Mail" name="logInEMAIL"/>
                            <div style="margin-top:20px;">
                                <input id="InputPassword" type="password" placeholder="      Password" name="logInPASSWORD"/>
                            </div>
                      <input id="SignIn" type="submit" value="Sign In"  />
                   </form>
               </div>
               <p class="Register">
                   DO NOT HAVE AN ACCOUNT   <a href="registration_form.html" style="margin-left:5px;">SIGN UP</a>
               </p>
           </div>
       </div>
   </div>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>