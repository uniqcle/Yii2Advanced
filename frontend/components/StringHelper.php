<?php

namespace frontend\components;

class StringHelper
{
    //Укорачивание текста. На входе принимает какой-то аргумент
    public function getShort($string){

        return substr($string, 0, 20);
    }
}
