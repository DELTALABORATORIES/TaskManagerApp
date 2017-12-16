<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/29/2017
 * Time: 3:06 PM
 */

namespace app\controllers;

use app\models\noteData;
use Yii;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use yii\helpers\Html;

class NotedumpController extends GlobalController
{

    public function actionDump(){

        $noteData = array();

        Yii::$app->request->getUrl();
        $data = Yii::$app->request->getQueryParams();
        $noteId = $data['id'];

        $_SESSION['focused_note'] = $noteId;

        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();

        $userName = $_SESSION['username'];

        $note = $database->getReference($userName)->getChild('notes/' . $noteId)->getValue();

        $noteName = strtoupper($note['note_name']);
        $noteBody = $note['note_text'];

        $noteData['name'] = $noteName;
        $noteData['body'] = $noteBody;

        echo $noteName;
        echo '|';
        echo $noteBody;
    }

}