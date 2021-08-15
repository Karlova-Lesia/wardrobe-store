<?php

namespace Framework\Database;

class Db
{
    public static function getConnection()
    {
        $params = include '../App/config/dbParams.php';

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}

