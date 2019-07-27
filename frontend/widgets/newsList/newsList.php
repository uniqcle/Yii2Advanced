<?php 
namespace frontend\widgets\newsList; 

use Yii; 
use yii\base\Widget; 
use frontend\models\News; 

class newsList extends Widget 
{

	public $showLimit = null; //кол-во новостей. По-умолч. null

	public function run(){

		$maxNewsInList = Yii::$app->params['maxNewsInList'];

		if( $this->showLimit ){
			$maxNewsInList = $this->showLimit; 
		}

        $listNews = News::getNewsList($maxNewsInList);

        return $this->render('block', [
            'listNews' => $listNews
        ]);
	}
}