<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex($message = 'Hello Vinh')
    {
        echo $this->render('index', ['message' => $message]);
    }
}