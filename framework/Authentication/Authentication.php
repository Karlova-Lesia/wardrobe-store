<?php


class Authentication
{
    private string $email = 'user@gmail.com';
    private string $password = 'user';


    public function isAuth(): bool
    {
        return isset($_SESSION['user']);
    }

    public function auth(string $email, string $password): bool
    {
        if ($this->email = 'user@gmail.com' && $this->password = 'user') {
            $_SESSION['user'] = $email;
            return true;
        }
        return false;
    }

    public function getLogin()
    {
        return (isset($this->email)) ? $this->email : false;
    }

    public function logOut(): void
    {
        unset($_SESSION['user']);
    }
}