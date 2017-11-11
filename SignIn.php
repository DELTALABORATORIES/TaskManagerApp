<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/13/2017
 * Time: 11:18 PM
 */

//Sign In Page Validation
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['logInEMAIL']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['logInPASSWORD'])) {
    header("Location:../index.html");
}
elseif ($_POST['logInEMAIL'] || null && $_POST['logInPASSWORD'] == null){
    header("Location:../index.html");
}
else {
    echo $_POST['logInEMAIL'];
    $accountDatabase = '../Database/userInfo.txt';
    $accountData = fopen($accountDatabase, 'r');
    while (! feof($accountData)) {
        $account = fgets($accountData);
        echo strpos($account, $_POST['logInEMAIL']);
        if (strpos($account, $_POST['logInEMAIL']) == false) {
            echo 'Wrong E-Mail Or Password';
        } else {
            $password = $_POST['logInPASSWORD'];
            $passwordStored = substr($account, -72);
            var_dump($passwordStored);
            echo $passwordStored;
            if (password_verify($password, $passwordStored) == true) {
                die('qwedwed');
                header("Location:../timeline_page.html");
            } else {
                echo 'Wrong Email or Password';
            }
        }
    }
}