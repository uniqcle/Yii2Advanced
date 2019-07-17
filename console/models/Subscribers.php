<?php 
namespace console\models; 

use Yii; 

class Subscribers 
{
	public static function getSubscribersList(){

		$sql = "SELECT * FROM subscribers; "; 

		return Yii::$app->db->createCommand($sql)->queryAll();
	}
}