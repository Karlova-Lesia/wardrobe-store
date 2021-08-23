<?php

namespace App\Models;

use Framework\Database\Db;

class User
{
    public static function register()
    {
    }

    public static function checkName(string $name): bool
    {
        return (strlen($name) >= 2 && ucfirst($name) === $name);
    }

    public static function checkLastname(string $lastname): bool
    {
        return (strlen($lastname) >= 5 && ucfirst($lastname) === $lastname);
    }

    public static function checkEmail(string $email): bool
    {
        return (filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    public static function checkEmailExist(string $email): bool
    {
        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, \PDO::PARAM_STR);
        $result->execute();

        return($result->fetchColumn());
    }

    public static function checkPassword(string $password): bool
    {
        return (strlen($password) >= 8);
    }

    public static function checkConfigPass(string $password, string $confirmPass): bool
    {
        return ($password === $confirmPass);
    }
}
