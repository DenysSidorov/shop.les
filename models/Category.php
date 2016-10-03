<?php

class Category
{

    /**
     * Returns an array[row][params] of categories
     */
    public static function getCategoriesList()
    {
        //connect PDO
        //require_once(ROOT.'/components/Db.php');
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT id, name FROM category '
                . 'ORDER BY sort_order ASC');

        $i = 0;

        /*
        массив Танки
        $t = array('Тигр','Пантера','Т-34','Аль Халид');
         массив Корабли
        $k = array('Кузнецов','Ямато','Ясень','Петропавловск');
         двумерный массив Техника
        $THN = array($t, $k);
        */

        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }

}