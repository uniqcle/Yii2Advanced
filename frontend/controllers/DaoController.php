<?php 
namespace frontend\controllers; 

use yii\web\Controller; 

class DaoController extends Controller 
{

	public function actionIndex(){

		$db = new \yii\db\Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ]);

        $sql = "SELECT * FROM cities; ";

        $command = new \yii\db\Command([
            'db'  => $db,
            'sql' => $sql
        ]);

        $arrResult = $command->queryAll();

        $sql = "SELECT * FROM cities; "; 
        $result = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = "SELECT name FROM cities; "; 
        $result = Yii::$app->db->createCommand($sql)->queryColumn();

        $sql = "SELECT * FROM cities WHERE id = 3; "; 
        $result = Yii::$app->db->createCommand($sql)->queryOne();

        $sql = "SELECT COUNT(*) as count FROM cities; "; 
        $result = Yii::$app->db->createCommand($sql)->queryScalar();


        $sql= "UPDATE..."
        ...->createCommand($sql)->execute();


        return $this->render( 'index',  compact( 'arrResult' )    );

 
	}
}