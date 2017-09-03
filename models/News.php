<?php
require_once __DIR__ . '/../classes/DB.php';

class News
{
    public $news_id;
    public $news_name;
    public $news_content;
    public $news_date;

    public static function getAll()
    {
    $db = new DB();
    return $db->query('SELECT * FROM news', 'News');
    }
}