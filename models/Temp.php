<?php

include_once '../models/Product.php';
include_once '../controllers/CatalogController.php';

function getUrlRedirect()
{
    $numberOfCategory = '';
    if (!empty($_SERVER['HTTP_REFERER'])) {
        $segments = explode('/', $_SERVER['HTTP_REFERER']);
        $numberOfCategory = 0;
        foreach ($segments as $index => $item) {


            if ($item == 'category') {
                if ($index == count($segments)) {
                    $numberOfCategory = $segments[$index];
                    break;
                } else {
                    $numberOfCategory = $segments[$index + 1];
                };
            }
        }
//        print_r($numberOfCategory);
        return $numberOfCategory;

    }
}

if ($_GET['namef']) {
    $p = $_GET['namef'];
}

//print_r($p);


Product::setOnePageView($p);
//Product::setOnePageView($_GET['namef']);

CatalogController::actionCategory($numberOfCategory, 1 );

//header("Location:/category/" . getUrlRedirect());
//header('Refresh: 1; URL=/category/13');

