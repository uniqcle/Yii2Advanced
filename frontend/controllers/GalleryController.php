<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 

class GalleryController extends Controller 
{

	public function actionIndex(){

		Yii::$app->assetManager->bundles = [ 'yii\web\JqueryAsset' => false ];

		return $this->render('index');
	}
}