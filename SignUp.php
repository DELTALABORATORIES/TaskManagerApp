<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/13/2017
 * Time: 11:02 PM
 */

//Sign Up Validation
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['logUpName']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['logUpLastName']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['logUpEmail']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['logUpPassword'])) {
    header("Location:../registration_form.html");
}
else{
    $accountDatabaseLoc = '../Database/userInfo.txt';
    $accountDatabase = fopen($accountDatabaseLoc, 'a');
    $password = $_POST['logUpPassword'];
    $options = [
        'cost' => 12,
    ];
    $passwordHash = password_hash($password,PASSWORD_BCRYPT, $options);
    $accountData = $_POST['logUpName'].' | '.$_POST['logUpLastName'].' | '.$_POST['logUpEmail'].' | '.$passwordHash."
";
    echo $accountData;
    fwrite($accountDatabase, $accountData);
    fclose($accountDatabase);

}
