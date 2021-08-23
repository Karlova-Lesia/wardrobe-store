<?php

namespace App\Controllers;

use App\Models\Product;
use Framework\Core\Controller;
use Framework\Core\View;

class ProductController extends Controller
{
    public function actionList()
    {
        $productsList = (new Product())->getProductsList()->productsList;
        echo View::render('productsPage', ['productsList' => $productsList]);
    }

    public function actionOneProduct(int $id)
    {
        $product = (new Product())->getProductById($id);

        echo '<pre>';
        print_r($product);
        echo '<pre>';
    }

    private function getArrayWithObject(object $object): array
    {
        return (array) $object;
    }
}
