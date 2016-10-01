<?php
/**
 * Created by PhpStorm.
 * User: vinh
 * Date: 22/09/2016
 * Time: 15:56
 */

namespace app\controllers;


use app\models\Users;
use yii\base\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        $users = Users::find()->all();
        return $this->render('index', ['users' => $users]);
    }
}