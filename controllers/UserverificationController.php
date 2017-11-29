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

/*        $userName = Yii::$app->request->post('logInUsername');
        $userPassword = Yii::$app->request->post('logInPassword');



        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();

        var_dump(Yii::$app->request->post('logInUsername'));
        var_dump($userName);
        exit();

        $userPasswordFirebase = $database->getReference($userName)->getChild('password')->getValue();

        if($userPassword === $userPasswordFirebase){
            $this->redirect('dashboard');
        }
        else{
           $this->redirect('');
        }*/

$this->redirect('dashboard');


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