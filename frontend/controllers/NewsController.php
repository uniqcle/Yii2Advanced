<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller
{
    public function actionIndex(){

        $listNews = News::getNewsList();

        return $this->render('index', [
            'listNews' => $listNews
        ]);
    }
}