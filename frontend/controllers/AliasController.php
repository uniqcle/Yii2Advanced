<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 

class AliasController extends Controller 
{

	public function actionTest(){

		//Работаете с определенным путем /var/www/project/upload/files
		//Создаем папку test1
 		$result = mkdir('/var/www/project/upload/files/test1');
		
			debug($result); 

		//Создаем папку test2 с помощью псевдонима
		Yii::setAlias('@files', '/var/www/project/upload/files');

		$result = mkdir( Yii::getAlias('@files').'/test2' );

			debug($result);

		$result = mkdir( Yii::getAlias('@photos').'/test3' );

			debug($result); 

echo Yii::getAlias('@app');      # /var/www/project/frontend
echo Yii::getAlias('@yii');      # /var/www/project/vendor/yiisoft/yii2
echo Yii::getAlias('@runtime');  # /var/www/project/frontend/runtime
echo Yii::getAlias('@vendor');   # /var/www/project/vendor
echo Yii::getAlias('@webroot');  # /var/www/project/frontend/web
echo Yii::getAlias('@web');      //не работает
	}
}