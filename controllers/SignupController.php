<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/12/2017
 * Time: 11:08 PM
 */

namespace app\controllers;


class SignupController extends GlobalController
{

    public function actionRender(){

        return $this->render('registration_form.php', [
            $this->layout = false
        ]);

    }

}