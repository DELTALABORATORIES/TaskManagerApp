<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/13/2017
 * Time: 10:52 AM
 */

namespace app\controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Yii;


class UserverificationController extends GlobalController
{

    public function actionVerify(){

        $session = Yii::$app->session;

        if (!$session->isActive){
            $session->open();
        }

        $userName = Yii::$app->request->post('logInUsername');
        $userPassword = 'test';



        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();

        $userPasswordFirebase = $database->getReference('test')->getChild('password')->getValue();

        if($userPassword === 'test'){
            $this->redirect('dashboard');
            $_SESSION['username'] = $userName;
        }
        else{
           $this->redirect('');
        }


        /*$newPost = $database
            ->getReference('Some')
            ->push([
                'title' => 'Post title',
                'body' => 'This should probably be longer.'
            ]);

        $newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
        $newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

        $newPost->getChild('title')->set('Changed post title');
        $newPost->getValue(); // Fetches the data from the realtime database

        $this->redirect('dashboard');*/
    }

}