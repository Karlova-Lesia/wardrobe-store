<?php

namespace App\Controllers;

use App\Models\Products;

class ProductsController
{
    public static function actionList()
    {
        $productsList = Products::getProductsList();

        echo '<pre>';
        print_r($productsList);
        echo '<pre>';
    }

    public static function actionOneCategoryList($category)
    {
        if ($category) {
            $oneCategoryList = Products::getProductListByName($category);
        }
        echo '<pre>';
        print_r($oneCategoryList);
        echo '<pre>';
    }

    public static function actionOneProduct(int $id)
    {
        if ($id) {
            $product = Products::getProductById($id);
        }
        echo '<pre>';
        print_r($product);
        echo '<pre>';
    }
}
