<?php
require __DIR__ . '/models/News.php';

//$db = new DB();
//$items = $db->query('SELECT * FROM news');
//var_dump($items);

//$news = new News();
$items = News::getAll();
//var_dump($items);

require __DIR__ . '/views/main.php';