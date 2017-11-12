<?php
/**
 * Created by PhpStorm.
 * User: sona
 * Date: 12/13/16
 * Time: 2:11 PM
 */


namespace app\controllers;

use app\extentions\GlobalException;
use Exception;
use Yii;
use yii\web\Controller;

use Firebase\JWT\JWT;
use yii\httpclient\Client;
use yii\web\Request;
use yii\web\Response;

class GlobalController extends Controller
{

    public $user_id = null;
    public $JWT = null;
    public $user_level_permission = [];

    public function init()
    {

        parent::init();
        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }

        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS,PUT,DELETE");
            }

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
            }
        }
    }

    public function beforeAction($action)
    {
        //ToDo change for our Ip
        if (parent::beforeAction($action)) {
            return true; // or false if needed
        } else {
            return false;
        }
    }


}
