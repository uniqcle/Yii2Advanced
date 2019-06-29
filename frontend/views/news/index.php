
<?php foreach($listNews as $newsItem): ?>
    <h2><?=$newsItem['title']; ?></h2>
    <p><?=$newsItem['content']; ?></p>
<?php endforeach; ?>
