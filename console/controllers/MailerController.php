<?php 
namespace console\controllers; 

use Yii; 
use yii\console\Controller; 

class MailerController extends Controller
{
	public function actionSend(){

		$names = ['Andrey', 'Kirill']; 

		$adminEmail = Yii::$app->params['adminEmail']; 
	    $adminName = Yii::$app->params['adminName'];

	    $textTitle = 'Заголовок письма'; 
		$anyMessage = 'Hello'; 

		$result = Yii::$app->mailer->compose('contact', [ //шаблон contact в common/mail
					'names' => $names, 
					'anyMessage' => $anyMessage
					]) 
	            ->setFrom( [$adminEmail => $adminName] ) 
	            ->setTo( 'it@sibagrotrade.ru' ) // кому отправляем  
	            ->setSubject( $textTitle ) // тема письма
/*	            ->setTextBody('Текст...') //  Закомментировать, если передаем в View
	            ->setHtmlBody('Текст...')*/
	            ->send();

	    if( $result ){
	 		echo 'Сообщение отправлено'; 
	    }

	}
}