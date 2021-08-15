<?php

namespace Framework\Router;

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = '../App/config/routes.php';
        $this->routes = include($routesPath); //include array of paths
    }

//    get request
    private function getURI(): string
    {
        return (!empty($_SERVER['REQUEST_URI'])) ? trim($_SERVER['REQUEST_URI'], '/') : false;
    }

    //request analysis and transfer of control

    public function run(): void
    {
        $uri = $this->getURI();

//        check the request

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $innerRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $innerRoute);
                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                $actionName = 'action' . ucfirst(array_shift($segments));
                $id = array_shift($segments);
//              include controller class

                $controllerFile = '../App/Controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

//                create an object controller class

                $controllerObject = new $controllerName();
                $result = $controllerObject->$actionName($id);
                if (!empty($result)) {
                    break;
                }
            }
        }
    }
}
