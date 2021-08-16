<?php

namespace App\Controllers;

use App\Models\Product;

class ProductsController
{
    public static function actionList()
    {
        $productsList = (new Product)->getProductsList();

        echo '<pre>';
        print_r($productsList);
        echo '<pre>';
    }

    public static function actionOneCategoryList($category)
    {
        if ($category) {
            $oneCategoryList = (new Product)->getProductListByName($category);
        }
        echo '<pre>';
        print_r($oneCategoryList);
        echo '<pre>';
    }

    public static function actionOneProduct(int $id)
    {
        if ($id) {
            $product = (new Product)->getProductById($id);
        }
        echo '<pre>';
        print_r($product);
        echo '<pre>';
    }
}
