<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Framework\Core\Controller;
use Framework\Core\View;

class CartController extends Controller
{
    public function actionAdd(int $id): void
    {
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        if ($referrer === 'http://wardrobe.com/products/search') {
            $this->redirect("/products/list");
        } else {
            $this->redirect("$referrer");
        }
    }

    public function actionIndex(): void
    {
        $productsInCart = Cart::getProducts();
        $totalPrice = 0;
        $products = [];

        if ($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = (new Product())->getProductsByIds($productsIds)->products;
            $totalPrice = Cart::getTotalPrice($products);
        }

        echo View::render('cartPage', ['products' => $products, 'totalPrice' => $totalPrice,
            'productsInCart' => $productsInCart]);
    }

    public function actionDelete(int $id): void
    {
        Cart::deleteProduct($id);
        $this->redirect("/cart");
    }
}
