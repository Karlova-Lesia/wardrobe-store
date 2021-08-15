<?php

namespace App\Models;

use Framework\Database\Db;

class Products
{
    public static function getProductsList()
    {
        $db = (new Products)->dbConnection();
        $result = $db->query('SELECT * FROM dresses');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['description'] = $row['description'];
            $productsList[$i]['size'] = $row['size'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductById(int $id)
    {
        if ($id) {
            $db = (new Products)->dbConnection();
            $result = $db->query('SELECT * FROM dresses WHERE id =' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $product = $result->fetch();

            return $product;
        }
    }

    private function dbConnection(): object
    {
        return Db::getConnection();
    }
}
