<?php

 class Product
{

     private static $onePageView = 2;

    public static function setOnePageView($number){
        Product::$onePageView = $number;

    }
    public static function getOnePageView(){
        return Product::$onePageView;
    }
//   public static $SHOW_BY_DEFAULT = 6;


    /**
     * Returns an array of products
     */
    public static function getLatestProducts($count)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();

        //$result = $db->query('SELECT id, name, price, image, is_new FROM product '
        $result = $db->query('SELECT id, name, price, is_new FROM product '
            . 'WHERE status = "1"'
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            // $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

    /**
     * Returns an array of products by one category
     */
    public static function getProductsListByCategory($categoryId = false, $page)
    {
        if ($categoryId) {
/**/
            $offset = ($page - 1) * self::getOnePageView();
            // echo 'page # '.$page;

            $db = Db::getConnection();
            $products = array();
/**/
            //$result = $db->query("SELECT id, name, price, image, is_new FROM product "
            $result = $db->query("SELECT id, name, price, is_new FROM product "
                . "WHERE status = '1' AND category_id = '$categoryId' "
                . "ORDER BY id DESC "
                . "LIMIT " . self::getOnePageView()
                . " OFFSET " . $offset);

            $i = 0;


            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                //$products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }

            return $products;
        }
    }


    /**
     * Returns product item by id
     * @param integer $id
     */
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }


    /**
     * Returns an array of recommended products
     */
    public static function getRecommendedProducts()
    {
        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, price, image, is_new FROM product '
            . 'WHERE status = "1" AND is_recommended = "1"'
            . 'ORDER BY id DESC ');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

    public  static function getTotalProductsInCategory($categoryId){
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1" AND category_id ="'.$categoryId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];

    }

    public static function getProdustsByIds($idsArray)
    {
        $products = array();

        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }

        return $products;
    }

}