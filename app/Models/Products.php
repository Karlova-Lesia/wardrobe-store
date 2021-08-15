<?php

namespace App\Models;

use Framework\Database\Db;

class Products
{
    public static function getProductsList(): array
    {
        $db = (new Products)->dbConnection();
        $result = $db->query('SELECT * FROM products');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetchAll();

    }

    public static function getProductListByName(int $name): array
    {
        $db = (new Products)->dbConnection();
        $result = $db->query('SELECT * FROM products WHERE name =' . $name);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetchAll();

    }

    public static function getProductById(int $id): object
    {
        $db = (new Products)->dbConnection();
        $result = $db->query('SELECT * FROM products WHERE id =' . $id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetch();

    }

    private function dbConnection(): object
    {
        return Db::getConnection();
    }
}
