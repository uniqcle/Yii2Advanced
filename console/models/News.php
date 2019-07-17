<?php 
namespace console\models; 

use Yii; 

class News 
{
	const STATUS_NOT_SEND = 1; 

	//Получить данные
	public static function getNewsList(){

		$sql = "SELECT * FROM news WHERE status =  ". self::STATUS_NOT_SEND; 

		$result = Yii::$app->db->createCommand($sql)->queryAll(); 

		return self::prepareNewsList( $result ); 
	}

	//Обработать данные. Обрезать до нужного размера
	public static function prepareNewsList( $result ){
		
		if( !empty($result) && is_array($result) ){
			foreach($result as &$item){
				$item['content'] = Yii::$app->stringHelper->getShort($item['content']);
			}
		}

		return $result; 
	}
}