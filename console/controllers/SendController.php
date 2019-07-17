<?php 
namespace console\controllers; 

use yii\console\Controller; 
use console\models\News; 
use console\models\Subscribers;
use console\models\Sending; 

class SendController extends Controller
{

	public function actionRun(){

		$newsList = News::getNewsList(); 

		$subscribersList = Subscribers::getSubscribersList(); 

		//Модель отправки писем
		Sending::run($newsList, $subscribersList);

	}
}