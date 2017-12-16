<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 12/14/2017
 * Time: 6:57 PM
 */

namespace app\controllers;

use app\models\noteData;
use Yii;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use yii\helpers\Html;


class SavechangesController extends GlobalController
{

    public function actionSave(){
        echo Yii::$app->request->post('note_content');

       $noteId = $_SESSION['focused_note'];

       $userName = $_SESSION['username'];

        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();


        $note = $database->getReference($userName)->getChild('notes/' . $noteId . '/note_text')->set('a');
    }

}