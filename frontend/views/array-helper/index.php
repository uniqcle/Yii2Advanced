<?php 
use yii\helpers\ArrayHelper; 
use yii\helpers\Html;

//$employeeList - переданный массив во View,
//Ключ по порядку, значение - email 
$emails = ArrayHelper::getColumn($employeeList, 'email');

debug($emails); 

//Где id - ключ, email - значение. В качестве ключей определенной поле из выборки. 
$dataList = ArrayHelper::map($employeeList, 'id', 'email');

echo Html::dropDownList('emails', null, $dataList, [
	        'prompt' => 'Select an item',
	        'class' => 'test'
    	]
    );

