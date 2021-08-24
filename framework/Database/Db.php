<?php

namespace Framework\Database;

use App\Config\Config;

class Db
{
    public static function getConnection(): object
    {
        $params = Config::getConfig();

        $dsn = "mysql:host={$params['db']['host']};dbname={$params['db']['dbname']}";
        return new \PDO($dsn, $params['db']['user'], $params['db']['password']);
    }
}
