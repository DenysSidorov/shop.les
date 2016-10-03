<?php

return array(
    
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    'news/([0-9]+)' => 'news/GetNew/$1', //rialization of news
    'news' => 'news/index',
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',  // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController


    '' => 'site/index', // actionIndex в SiteController
    
);
