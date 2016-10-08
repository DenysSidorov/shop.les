<?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors','1');
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
//include_once (ROOT.'/models/Product.php');
//require_once(ROOT.'/components/Router.php');
//require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/components/Autoload.php');


// 4. Вызов Router
$router = new Router();
$router->run();
