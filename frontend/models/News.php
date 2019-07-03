<?php

namespace frontend\models;

use Yii;
//use frontend\components\StringHelper; //Это можно удалить

class News
{
    public static function  getNewsList($maxNewsInList){

        $maxNewsInList = intval($maxNewsInList);

        $sql = "SELECT * FROM news LIMIT ".$maxNewsInList;
        $result =  Yii::$app->db->createCommand($sql)->queryAll();

        //Создаем экземпляр класса StringHelper
        //$helper = new StringHelper();
        $helper2 = Yii::$app->stringHelper; //Создаем во время запуска приложения

        if(!empty( $result ) && is_array( $result )){

            //Использование компонента StringHelper
            foreach($result as &$item):
                //$item['content'] = $helper2->getShort( $item['content'], 30 );
                //или сокращенное название
                $item['content'] = Yii::$app->stringHelper->getShort( $item['content'], 30 );
            endforeach;

        }

        return $result;

}
}
