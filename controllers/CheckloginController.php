<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 12/4/2017
 * Time: 11:38 PM
 */

namespace app\controllers;


class CheckloginController extends GlobalController
{

    public function actionCheckpassword(){
        $password = $_GET['password'];
        $passwordRepeat = $_GET['passwordRepeat'];

        if ($password === $passwordRepeat){
            return 'true';
        }
        else{
            return 'false';
        }
    }

}