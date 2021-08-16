<?php

namespace App\Models;

use Framework\Database\Db;

class Product
{
    public function getProductsList(): Product
    {
        $db = $this->dbConnection();
        $result = $db->query('SELECT * FROM products');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetchAll();
    }

    public function getProductListByName(int $name): Product
    {
        $db = $this->dbConnection();
        $result = $db->query('SELECT * FROM products WHERE name =' . $name);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetchAll();
    }

    public function getProductById(int $id): Product
    {
        $db = $this->dbConnection();
        $result = $db->query('SELECT * FROM products WHERE id =' . $id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetch();
    }

    private function dbConnection(): object
    {
        return Db::getConnection();
    }
}
