<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/12/2017
 * Time: 12:56 AM
 */

namespace app\controllers;


class LoginController extends GlobalController
{

    public function actionRender(){

       return $this->render('login-page.php', [
            $this->layout = false
       ]);

    }

}