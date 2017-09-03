<?php


class DB{

    public function __construct()
    {
        $this->mysqli = new mysqli("localhost", "root", "", "mysite");

    }

    public function query($sql, $class_name = "stdClass")
    {
    $res = $this->mysqli->query($sql);
    if(false === $res)
    {
        return false;
    }
    $ret =[];
    while ($row = $res->fetch_object($class_name))
   {
        $ret[] = $row;
   }
    return $ret;
    }

}