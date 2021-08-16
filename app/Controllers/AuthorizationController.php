<?php

namespace App\Controllers;

use Framework\Authentication\Authentication;
use Framework\Helpers\ChangePages;

class AuthorizationController
{
    public static function index(): void
    {
        ChangePages::render('authorizationPage');
    }

    public static function login(array $user): void
    {
        if (Authentication::auth($user['email'], $user['password'])) {
            ChangePages::render('/');
        }
        ChangePages::render('/authorizationPage');
    }

    public static function logout(): void
    {
        Authentication::logOut();
        ChangePages::render('/');
    }
}
