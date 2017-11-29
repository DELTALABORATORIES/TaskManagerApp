<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/13/2017
 * Time: 2:30 PM
 */

namespace app\controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



class CreateaccountController extends GlobalController
{

    public function actionCreate(){

        $userFullName = $_POST['signUpFullName'];
        $userUsername = $_POST['signUpUsername'];
        $userRegistrationDate = date('Y-m-d'); //TODO: or use time() for timestamp
        $userEmail = $_POST['signUpEmail'];
        $userPassword = $_POST['signUpPassword'];
        $userPasswordRepeat = $_POST['signUpPasswordRepeat'];

        if ($userPassword === $userPasswordRepeat){
            $options = [
                'cost' => 12,
            ];
            $userPasswordHashed = password_hash($userPassword , PASSWORD_BCRYPT , $options);
        }
        else{
            $this->redirect('sign_up');
        }

        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();

        $database->getReference($userUsername)->set(
            [
                'user_full_name' => $userFullName,
                'user_username' => $userUsername,
                'user_email' => $userEmail,
                'registration_date' => $userRegistrationDate,
                'notes' => [
                    'note_id' => 1,
                    'note_created_at' => time(),
                    'note_completed' => true,
                    'note_data' => [
                        'note_title' => 'Some test note',
                        'note_content' => 'JetBrains, creator of the leading Java IDE - IntelliJ IDEA - is a cutting-edge software vendor specializing in the creation of intelligent development tools.'
                    ]
                ],
                'user_password' => $userPasswordHashed,

            ]
        );

        $this->redirect('');

    }

}