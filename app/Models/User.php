<?php

namespace App\Models;

use Exception;
use Framework\Database\Db;
use Framework\Session\Session;

class User
{
    public array $user;

    /**
     * @throws Exception
     */
    public function getUserById(int $id): User
    {
        $db = Db::getConnection();
        if (!$id) {
            throw new Exception("User with $id don`t found");
        }
        try {
            $data = $db->query('SELECT * FROM users WHERE id =' . $id);
            $data->setFetchMode(\PDO::FETCH_ASSOC);
            $this->user = $data->fetch();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $this;
    }

    public static function edit(int $id, string $lastname, string $password): bool
    {
        $db = Db::getConnection();

        $sql = "UPDATE users SET lastname = '$lastname', password = '$password' WHERE id = $id";
        $result = $db->prepare($sql);

        return $result->execute();
    }

    public static function register(string $name, string $lastname, string $email, string $password): bool
    {
        $db = Db::getConnection();
        $sql = "INSERT INTO users (name, lastname, email, password) VALUES 
            ('$name', '$lastname', '$email', '$password')";
        $result = $db->prepare($sql);

        return $result->execute();
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
        $sql = "SELECT COUNT(*) FROM users WHERE email = '$email'";
        $result = $db->prepare($sql);
        $result->execute();

        return ($result->fetchColumn());
    }

    public static function checkPassword(string $password): bool
    {
        return (strlen($password) >= 8);
    }

    public static function checkConfigPass(string $password, string $confirmPass): bool
    {
        return ($password === $confirmPass);
    }
    public static function checkUserData(string $email, string $password)
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $db->prepare($sql);
        $result->execute();

        $user = $result->fetch();
        return ($user) ? $user['id'] : false;
    }

    /**
     * @throws \Exception
     */
    public static function auth(string $userId): void
    {
        $_SESSION['user'] = $userId;
    }

    /**
     * @throws \Exception
     */
    public static function checkLogged()
    {
        if ($_SESSION['user']) {
            return $_SESSION['user'];
        }
        return false;
    }

    /**
     * @throws \Exception
     */
    public static function isGuest(): bool
    {
        return (!isset($_SESSION['user']));
    }
}
