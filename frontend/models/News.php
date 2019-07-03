<?php

namespace frontend\models;

use Yii;
use frontend\components\StringHelper;

class News
{
    public static function  getNewsList($maxNewsInList){

        $maxNewsInList = intval($maxNewsInList);

        $sql = "SELECT * FROM news LIMIT ".$maxNewsInList;
        $result =  Yii::$app->db->createCommand($sql)->queryAll();

        //Создаем экземпляр класса StringHelper
        $helper = new StringHelper();

        if(!empty( $result ) && is_array( $result )){

            //Использование компонента StringHelper
            foreach($result as &$item):
                $item['content'] = $helper->getShort( $item['content'] );
            endforeach;

        }

        return $result;

}
}
