<?php

namespace frontend\models;

use Yii;

class News
{
    public static function  getNewsList($maxNewsInList){

        $maxNewsInList = intval($maxNewsInList);

        $sql = "SELECT * FROM news LIMIT ".$maxNewsInList;
        return Yii::$app->db->createCommand($sql)->queryAll();
}
}
