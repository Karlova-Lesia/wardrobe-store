<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

 require_once '../Framework/Router/Router.php';
 require_once '../Framework/Database/Db.php';

// session_start();

 $router = new Router();
 $router->run();

