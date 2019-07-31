<?php 
namespace frontend\models; 

use Yii; 
use yii\base\Model; 

class Newsletter extends Model
{
	public $email; 

	//Правила валидации
	public function rules(){

		return [
			//[['поле'], 'валидатор']
			[['email'], 'required'],
			[['email'], 'email']
		];
	}

	//Сохранение данных в БД
	public function save(){
		$sql = "INSERT INTO subscribers (id, name, email) VALUES (null, null, '{$this->email}'); "; 

		return Yii::$app->db->createCommand($sql)->execute();
	}

	public static function find(){

		$sql = "SELECT * FROM subscribers; "; 
		return Yii::$app->db->createCommand($sql)->queryAll();
	}

}

