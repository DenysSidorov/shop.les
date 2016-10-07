<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class ProductController
{

    public function actionView($productId)
    {

        // Получение назввания категории
        $prod = Product::getProductById($productId);
        $catId = $prod['category_id'];
        $cat = Category::getCategoryById($catId);
        $catName = $cat['name'];


        $categories = array();
        $categories = Category::getCategoriesList();
        
        $product = Product::getProductById($productId);
//        print_r($product);
        $isAdmin  = User::isAdmin();

        require_once(ROOT . '/views/product/view.php');

        return true;
    }

}
