<?php


class NewsController
{
    public function actionIndex()
    {
        $carArray = array();
        $carArray = ["Audi", "BMW", "Toyota", "Lada"];

        require_once(ROOT . '/views/news/new.php');
        return true;
    }

    public function actionGetNew($id)
    {
        echo $id;
        return true;
    }
}
