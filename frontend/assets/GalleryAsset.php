<?php 
namespace frontend\assets; 

use yii\web\AssetBundle; 

class GalleryAsset extends AssetBundle
{
	//Указываем какие ресурсы нужно подключать на страницу
	public $css = [
		'css/style.css'
	]; 

	public $js = [
		'js/jquery.js',
		'js/jquery.isotope.js', 
	];

	public $depends = [
		//className
	]; 

	 
}