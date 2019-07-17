<?php

namespace common\components;

use Yii;

class StringHelper
{
    public $limit; //Определяем св-во limit

    public function __construct(){
        $this->limit = Yii::$app->params["shortTextLimit"];
    }

    //Укорачивание текста. На входе принимает какой-то аргумент
    public function getShort($string, $limit = null){

        //Если в методе задан limit, то используем его. Если не задан по-умолч. , то берем из параметров.
        if( empty( $limit )){
            $limit = $this->limit;
        }

        return substr($string, 0, $limit );
    }
}
