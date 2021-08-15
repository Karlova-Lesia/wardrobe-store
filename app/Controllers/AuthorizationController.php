<?php

namespace App\Controllers;

use Framework\Helpers\ChangePages;

class AuthorizationController
{
    public static function index()
    {
        ChangePages::render('authorizationPage');
    }
}
