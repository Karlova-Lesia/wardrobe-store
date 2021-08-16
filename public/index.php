<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

 require '../vendor/autoload.php';

 use Framework\Router\Router;

 $router = new Router();
 $router->run();

 $controllerName = $router->getControllerName();

if (class_exists($controllerName)) {
    $controllerObject = new $controllerName();
    call_user_func_array([$controllerObject, $router->getActionName()], $router->getParams());
}
