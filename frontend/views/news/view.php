
<?php 
use yii\helpers\Url; 
 ?>

<h2><?=$itemNews["title"] ?></h2>
<p><?=$itemNews["content"] ?></p>

<a href="<?php echo Url::to(['news/index']); ?> ">Назад</a>