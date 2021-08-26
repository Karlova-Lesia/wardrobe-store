<?php

namespace App\Models;

use Framework\Database\Db;
use Exception;

class Product
{
    public array $productsList;
    public array $oneCategoryList;
    public array $product;

    public function getProductsList(): Product
    {
        $db = $this->dbConnection();
        $data = $db->query('SELECT id, name, description, price, image FROM products');
        $data->setFetchMode(\PDO::FETCH_ASSOC);
        $data->execute();
        $this->productsList = $data->fetchAll();

        return $this;
    }

    /**
     * @throws Exception
     */
    public function getProductById(int $id): Product
    {
        $db = $this->dbConnection();
        if (!$id) {
            throw new Exception("Product with $id don`t found");
        }
        try {
            $data = $db->query('SELECT id, name, description, price, image FROM products WHERE id = ' . $id);
            $data->setFetchMode(\PDO::FETCH_ASSOC);
            $this->product = $data->fetch();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $this;
    }

    /**
     * @throws Exception
     */
    public function getOneCategory(string $img): Product
    {
        $db = $this->dbConnection();
        if (!$img) {
            throw new Exception("Category $img don`t found");
        }
        try {
            $data = $db->query("SELECT id, name, description, price, image FROM products WHERE image LIKE '%$img%' ");
            $data->setFetchMode(\PDO::FETCH_ASSOC);
            $data->execute();
            $this->oneCategoryList = $data->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $this;
    }

    private function dbConnection(): object
    {
        return Db::getConnection();
    }
}
