<?php foreach ($items as $item): ?>
    <h1><?= $item->news_name ?></h1>
    <div><?= $item->news_date ?></div>
    <div><?= $item->news_content ?></div>
<?php endforeach; ?>