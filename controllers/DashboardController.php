<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/12/2017
 * Time: 11:12 PM
 */

namespace app\controllers;


class DashboardController extends GlobalController
{

    public function actionRender(){

        return $this->render('dashboard.php', [
            $this->layout = false
        ]);

    }

}