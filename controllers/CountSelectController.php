<?php
/*  We created AutoLoad Class, which do it
//include_once ROOT . '/models/Category.php';
//include_once ROOT . '/models/Product.php';
//include_once ROOT . '/components/Pagination.php';
*/
//include_once ROOT . '../models/Category.php';
class CountSelectController
{

    public function actionIndex()
    {

      //  print_r('Текущее = '.Product::getOnePageView().'<br>');

        if (isset($_POST['namef'])){
           // print_r($_POST['namef'].'<br>');
            Product::setOnePageView($_POST['namef']);
            //print_r('Что получил = '.Product::getOnePageView().'<br>');
            header("Location: /category/13");
        }

        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        /**/
        $latestProducts = Product::getLatestProducts(Product::getOnePageView());


        //require_once(ROOT . '/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {
        //echo $categoryId.'  categoria id '.'<br>';
        //echo $page.'  page # '.'<br>';
        $onePageView = Product::getOnePageView();
        print_r($_GET['myForm']);

        if (isset($_POST['myForm'])){
            $_POST['myForm'];
            $setOnePageView = $_POST['namef'];
            print_r($setOnePageView);
        }



        $categories = array();
        $categories = Category::getCategoriesList(); //arr[row][params]

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page); //arr[row][params]

        // формируем количество записей для класса paginatin;
        $total = Product::getTotalProductsInCategory($categoryId);
        /**/
        $viewPaginatin =  (Product::getTotalProductsInCategory($categoryId)>Product::getOnePageView()) ? true : false;
        /**/
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::getOnePageView(), 'page-');

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }

}
/*  We created AutoLoad Class, which do it
//include_once ROOT . '/models/Category.php';
//include_once ROOT . '/models/Product.php';
//include_once ROOT . '/components/Pagination.php';
*/
/*  We created AutoLoad Class, which do it
include_once ROOT . '/models/Category.php';
//include_once ROOT . '/models/Product.php';
//include_once ROOT . '/components/Pagination.php';
*/
