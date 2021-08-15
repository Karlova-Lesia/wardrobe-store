<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

 require '../vendor/autoload.php';

 use Framework\Router\Router;

 $router = new Router();
 $router->run();
