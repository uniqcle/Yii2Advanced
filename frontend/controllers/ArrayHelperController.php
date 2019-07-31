<?php 
namespace frontend\controllers; 

use yii\web\Controller; 
use frontend\models\Newsletter; 

class ArrayHelperController extends Controller 
{

	public function actionIndex(){

		$employeeList = Newsletter::find();

		return $this->render('index', compact('employeeList') );
	}
}