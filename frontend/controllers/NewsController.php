<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller
{
    public function actionIndex(){

        $maxNewsInList = Yii::$app->params['maxNewsInList'];

        $listNews = News::getNewsList($maxNewsInList);

        return $this->render('index', [
            'listNews' => $listNews
        ]);
    }
}