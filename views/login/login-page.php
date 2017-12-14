<!DOCTYPE html>

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
               APOLLO<br><br> "Note-taking for developer"
           </p>
           <p class="Description">
               "Your markdown notes are saved automatically as you write and various formatting options have semi-live previews so you can double check what you’re writing. Text is formatted as you type.

               For code snippets the app is able to highlight code syntax in more than 100 languages, including Javascript, Python, HTML and CSS and you can store multiple code snippets within the same snippet."</p>
       </div>
       <div class="SignInForm">
           <div class="SignIn">
               <img src="../../images/Logos/DELTA Network-normal.png" alt="" id="SignInLogo" />
               <hr id="hrLong"/>
               <hr id="hrShort"/>
               <div class="FormContainer">
                   <form action="/verify" method="POST">
                       <input id="InputUsername" type="text" placeholder="      Username" name="logInUsername"/>
                            <div style="margin-top:20px;">
                                <input id="InputPassword" type="password" placeholder="      Password" name="logInPassword"/>
                            </div>
                      <input id="SignIn" type="submit" value="Sign In"  />
                       <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                   </form>
               </div>
               <p class="Register">
                   DO NOT HAVE AN ACCOUNT   <a href="sign_up" style="margin-left:5px;">SIGN UP</a>
               </p>
               <p class="Register" style="margin-top: 40px;font-size: 16px">
                   Copyright © X Labs<br />
               </p>
           </div>
       </div>
   </div>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>