<?php


abstract class AbstractModel
{
    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB();
        return $db->queryAll('SELECT * FROM ' . static::$table , static::$class);
    }

    public static function getOne($id)
    {
        $db = new DB();
        $sql = 'SELECT * FROM '. static::$table .' WHERE news_id='. $id;
        return $db->queryAll($sql, static::$class);
    }

}