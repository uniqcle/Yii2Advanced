<?php 
namespace console\models; 

use Yii; 

class Sending
{
	public static function run($newsList, $subscribersList){
		
		$adminEmail = Yii::$app->params['adminEmail']; 
	    $adminName = Yii::$app->params['adminName']; 

	    $textTitle = "Текст заголовка"; 

	    foreach($subscribersList as $subscriber):

	    $result = Yii::$app->mailer->compose('contact', [ //шаблон contact в common/mail
					'subscriber' => $subscriber, 
					'newsList' => $newsList
					]) 
	            ->setFrom( [$adminEmail => $adminName] ) 
	            ->setTo( $subscriber['email'] ) // кому отправляем  
	            ->setSubject( 'Письма с рассылкой' ) // тема письма
/*	            ->setTextBody('Текст...') //  Закомментировать, если передаем в View
	            ->setHtmlBody('Текст...')*/
	            ->send();

	    endforeach; 
	}
}