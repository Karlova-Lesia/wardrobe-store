<?php

namespace App\Controllers;

use Framework\Core\Controller;
use Framework\Core\View;

class HomeController extends Controller
{
    public function actionIndex()
    {
        echo View::render('mainPage', ['mainImg' => '/img/main.png']);
    }
}
