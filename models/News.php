<?php


class News
    extends AbstractModel
{
    public $news_id;
    public $news_name;
    public $news_content;
    public $news_date;

    protected static $table = 'news';
    protected static $class = 'News';




}
