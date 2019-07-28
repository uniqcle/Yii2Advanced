<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 

class NivosliderController extends Controller 
{

	public function actionIndex(){


		return $this->render('index');
	}
}