<?php

namespace Framework\Database;

class Db
{
    public static function getConnection(): object
    {
        $params = include '../app/config/dbParams.php';

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        return new PDO($dsn, $params['user'], $params['password']);
    }
}

