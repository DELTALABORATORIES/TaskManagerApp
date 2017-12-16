<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/21/2017
 * Time: 2:03 PM
 */

namespace app\models;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Yii;

class noteData
{

    public function getNotes(){

        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();

        $userName = 'test';

        $noteData = $database->getReference($userName)->getChild('notes')->getValue();
        $noteID = $database->getReference($userName)->getChild('notes')->getChildKeys();
        $idCount = 0;

        foreach ($noteData as $note){
            if (!$note == null){
                if($note['note_completed'] === 'true'){
                    echo ' <div class="task" data-id="'. $idCount .'">
                            <div>
                                <span>
                                    <img src="../../images/CheckSigns/checked_purple.svg" class="task-check" id="'. $idCount .'" data-status="1">
                                 </span>
                                <p class="task-name">
                                    ' . $note['note_name'] . '
                                </p>
                                <p class="task-date">
                                    ' . $note['note_creation_date'] . '
                                </p>
                            </div>
                            <div>
                                <p class="task-content">
                                    ' . $note['note_text'] . '
                                </p>
                            </div>
                        </div>';
                }
                else if($note['note_completed'] === 'false'){
                    echo ' <div class="task" data-id="' . $idCount . '">
                            <div>
                                <span>
                                    <img src="../../images/CheckSigns/checked_black.svg" class="task-check" id="'. $idCount .'" data-status="0">
                                 </span>
                                <p class="task-name">
                                    ' . $note['note_name'] . '
                                </p>
                                <p class="task-date">
                                    ' . $note['note_creation_date'] . '
                                </p>
                            </div>
                            <div>
                                <p class="task-content">
                                    ' . $note['note_text'] . '
                                </p>
                            </div>
                        </div>';
                }
                $idCount++;
            }
        }
    }

    public function getNoteCount(){
        $serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
        $apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

        $firebase = (new Factory)
            ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
            ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
            ->create();

        $database = $firebase->getDatabase();

        $userName = 'samo_777';

        $noteData = $database->getReference($userName)->getChild('notes')->getValue();

        $count = 0;

        foreach ($noteData as $note){
            if (!$note == null) {
                $count += 1;
            }
        }

        echo $count;
    }

}