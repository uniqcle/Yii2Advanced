<?php foreach($listNews as $newsItem): ?>
    <h2>
        <a href = "<?php echo Yii::$app->urlManager->createUrl(['news/view', 'id' => $newsItem['id']]); ?>"> 

        <?=$newsItem['title']; ?> 
    </a> 
    </h2>
    <p><?=$newsItem['content']; ?></p>
<?php endforeach; ?>