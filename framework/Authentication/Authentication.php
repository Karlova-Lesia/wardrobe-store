<?php

namespace Framework\Authentication;

use Exception;
use Framework\Session\Session;

class Authentication
{
    public function isAuth(): bool
    {
        return Session::sessionExists();
    }

    /**
     * @throws Exception
     */
    public function auth(string $email, string $password): bool
    {
//        foreach ($users as $user) {
//            if ($user['email'] === $email && $user['password'] === $password) {
//                Session::start();
//                Session::set('email', $email);
//                return true;
//            }
//        }
//        return false;
    }

    /**
     * @throws Exception
     */
    public function getLogin(): string
    {
        return Session::get('email');
    }

    /**
     * @throws Exception
     */
    public function logOut(): void
    {
        Session::destroy();
    }
}
