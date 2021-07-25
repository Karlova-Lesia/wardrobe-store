<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

 require_once '../App/lib/Autoloader.php';
 require_once '../Framework/Router/Router.php';
 require_once '../Framework/Database/Db.php';
 require_once '../Framework/Session/Session.php';


 $session = new Session();
 $session->start();

 $router = new Router();
 $router->run();

