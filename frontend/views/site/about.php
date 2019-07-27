<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

// Подключаем виджет 
use frontend\widgets\newsList\newsList; 

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

	<div class="row">
		<div class="col-md-9">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, maiores, molestias. In facere necessitatibus, excepturi praesentium accusantium modi blanditiis repellat quae. Amet perspiciatis placeat, culpa maiores recusandae magni nulla, minima.</div>
		<div class="col-md-3">
	        
	        <!-- Вызов виджета --> 
	        <?php echo newsList::widget(['showLimit' => 3]); ?>

		</div>
	</div>
</div>
