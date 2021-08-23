<?php

namespace App\Controllers;

use Framework\Authentication\Authentication;
use Framework\Core\View;

class AuthorizationController
{
    public static function actionIndex(): void
    {
        echo View::render('authorizationPage', []);
    }

    public static function login(array $user): void
    {
        if (Authentication::auth($user['email'], $user['password'])) {
            View::render('/', []);
        }
        View::render('/authorizationPage', []);
    }

    public static function logout(): void
    {
        Authentication::logOut();
        View::render('/', []);
    }
}
