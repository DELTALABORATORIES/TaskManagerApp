<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 11/13/2017
 * Time: 12:51 PM
 */

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile('google-service-account.json');
$apiKey = 'AIzaSyBhrtlVE4A5m5K2BIOUf05w5mf7P6Rigcs';

$firebase = (new Factory)
    ->withServiceAccountAndApiKey($serviceAccount, $apiKey)
    ->withDatabaseUri("https://task-manager-6ee5b.firebaseio.com")
    ->create();

    $database = $firebase->getDatabase();