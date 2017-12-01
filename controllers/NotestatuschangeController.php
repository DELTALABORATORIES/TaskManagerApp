<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/22/2017
 * Time: 11:23 PM
 */

namespace app\controllers;

use Yii;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use yii\helpers\Html;


class NotestatuschangeController extends GlobalController
{

    public function actionChangestatus(){


        Yii::$app->request->getUrl();
        $data = Yii::$app->request->getQueryParams();
        $noteId = $data['id'];
        $noteCurrentStatus = $data['status'];

        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();

        $userName = 'samo_777';

        if($noteCurrentStatus === '1'){
            $database->getReference($userName)->getChild('notes/' . $noteId .  '/note_completed')->set('false');
            echo "Done";
        }
        else if($noteCurrentStatus === '0'){
            $database->getReference($userName)->getChild('notes/' . $noteId .  '/note_completed')->set('true');
            echo 'done';
        }
    }

}