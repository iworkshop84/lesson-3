<?php


class NewsController
{

    public function actionAll()
    {
        $items = News::getAll();
        require __DIR__ . '/../views/news/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        require __DIR__ . '/../views/news/one.php';
    }
}