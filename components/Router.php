<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получить строку запроса
        $uri = $this->getURI();

        // Проверить наличие такого запроса в routes.php
//    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
//             'catalog' => 'catalog/index', // actionIndex в CatalogController
//   'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController
//                    '' => 'site/index', // actionIndex в SiteController



        //'category/([0-9]+)'   - "~$uriPattern~"
        //catalog/category/$1'  - path
        //    category/13       - uri (User)

        //'catalog' => 'catalog/index'

        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
                
                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                //result = 'catalog/category/13'

                // Определить контроллер, action, параметры

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                // $controllerName = CatalogController
                //$segments = [category, 13]'

                $actionName = 'action' . ucfirst(array_shift($segments));
                // $actionName =  actionCategory
                $parameters = $segments; //13

                
                // Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Создать объект, вызвать метод (т.е. action)
                // print_r($controllerName);
                $controllerObject = new $controllerName;

                // see https://php.ru/manual/function.call-user-func-array.html
                //  Передаем в actionName $parameters
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
