<?php

namespace Framework\Router;

class Router
{
    private array $routes;
    private string $controllerName = '';
    private string $actionName = '';
    private array $params;


    public function __construct()
    {
        $routesPath = '../framework/Router/routes.php';
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
                $this->controllerName = ucfirst(array_shift($segments) . 'Controller');
                $this->actionName = 'action' . ucfirst(array_shift($segments));
                $this->params = $segments;
            }
        }
    }

    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    public function getActionName(): string
    {
        return $this->actionName;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}
