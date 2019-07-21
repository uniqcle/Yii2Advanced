<?php 
namespace frontend\controllers; 

use yii\web\Controller; 

use Yii; 
use frontend\models\Newsletter; 

class NewsletterController extends Controller 
{	
	//Страница подписки
	public function actionSubscribe(){
		
		$formData = Yii::$app->request->post(); //Загружает данные из глобального массива POST

		$model = new Newsletter(); 

		if( Yii::$app->request->isPost ){ //isPost - переменная. Post запрос был  или нет. 

			//Загружаем данные в модель
			$model->email = $formData['email']; 

			//Процедура валидации по правилам и сохранение в БД
			if( $model->validate() && $model->save() ){

				//Устанавливаем Flash сообщение
				Yii::$app->session->setFlash('subscribeStatus', 'Вы успешно подписались!');
			} 	

		}

		return $this->render('subscribe', [
			'model' => $model 
		]);
	}
}