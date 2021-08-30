<?php

namespace App\Controllers;

use App\Models\Product;
use Framework\Core\Controller;
use Framework\Core\View;

class ProductsController extends Controller
{
    public function actionList(): void
    {
        $productsList = (new Product())->getProductsList()->productsList;
        echo View::render('productsPage', ['productsList' => $productsList]);
    }

    /**
     * @throws \Exception
     */
    public function actionOneProduct(int $id): void
    {
        $product = (new Product())->getProductById($id)->product;
        echo View::render('oneProductPage', ['product' => $product]);
    }

    /**
     * @throws \Exception
     */
    public function actionOneCategory(string $img): void
    {
        $oneCategoryList = (new Product())->getOneCategory($img)->oneCategoryList;
        echo View::render('oneCategoryPage', ['oneCategoryList' => $oneCategoryList]);
    }

    public function actionApiProducts()
    {
        echo json_encode((new Product())->getProductsList()->productsList);
    }

    public function actionSearch(): void
    {
        $search = '';
        $product = [];

        if ($this->getPost()) {
            $search = $_POST['search'];
            $product = (new Product())->getResultSearch($search)->search;
        }
        echo View::render('searchProductPage', ['product' => $product, 'search' => $search]);
    }
}
