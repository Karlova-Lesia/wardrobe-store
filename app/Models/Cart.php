<?php

namespace App\Models;

class Cart
{
    public static function addProduct(int $id): void
    {
        $productsInCart = array();

        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }
        $_SESSION['products'] = $productsInCart;
    }

    public static function countItems(): int
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {
        return (isset($_SESSION['products'])) ? $_SESSION['products'] : false;
    }

    public static function getTotalPrice(array $products): int
    {
        $productsInCart = self::getProducts();
        $total = 0;

        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }


    public static function clear(): void
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

    public static function deleteProduct(int $id): void
    {
        $productsInCart = self::getProducts();
        unset($productsInCart[$id]);
        $_SESSION['products'] = $productsInCart;
    }
}
