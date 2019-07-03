<?php

//Сначала указываем имя контроллера
namespace frontend\controllers;

use Yii;

//Базовый класс контроллера
use yii\web\Controller;

class HelloWorldController extends Controller
{
    public function actionIndex(){

        //Подключение View
        $email = Yii::$app->params["adminEmail"];

        return $this->render('index', [
            'email' => $email
        ]);
    }
}

