<?php

namespace App\Models;

use Framework\Database\Db;

class Product
{
    public array $productsList;
    private array $product;

    public function getProductsList(): Product
    {
        $db = $this->dbConnection();
        $result = $db->query('SELECT id, name, description, price, image FROM products');

        $i = 0;
        while ($row = $result->fetch()) {
            $this->productsList[$i]['id'] = $row['id'];
            $this->productsList[$i]['name'] = $row['name'];
            $this->productsList[$i]['description'] = $row['description'];
            $this->productsList[$i]['price'] = $row['price'];
            $this->productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $this;
    }

    public function getProductById(int $id): Product
    {
        $db = $this->dbConnection();
        $data = $db->query("SELECT id, name, description, price, image FROM products WHERE id = $id ");
        $data->setFetchMode(\PDO::FETCH_ASSOC);
        $this->product = $data->fetch();
        return $this;
    }

    private function dbConnection(): object
    {
        return Db::getConnection();
    }
}
