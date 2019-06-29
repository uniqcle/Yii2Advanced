<?php

//Сначала указываем имя контроллера
namespace frontend\controllers;

//Базовый класс контроллера
use yii\web\Controller;

class HelloWorldController extends Controller
{
    public function actionIndex(){

        //Подключение View
        return $this->render('index');
    }
}

