
<h2>Привет, <?=$subscriber['name'] ?></h2>

<p>Свежие новости: </p>

<?php foreach($newsList as $item): ?>

<h3><?=$item['title']; ?></h3>
<p><?=$item['content']; ?></p>

<?php endforeach; ?>