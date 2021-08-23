<?php

namespace App\Models;

use Framework\Database\Db;

class Product
{
    public function getProductsList(): Product
    {
        $db = $this->dbConnection();
        $result = $db->query('SELECT * FROM products');
        $productList = new Product();
        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['description'] = $row['description'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productList;
    }

    public function getProductListByName(int $name): Product
    {
        $db = $this->dbConnection();
        $result = $db->query('SELECT * FROM products WHERE name =' . $name);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        var_dump($result->fetchAll());
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
