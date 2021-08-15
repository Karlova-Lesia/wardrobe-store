<?php

namespace App\Controllers;

use App\Models\Dresses;

class ProductsController
{
    public function actionList()
    {
        $dressesList = Dresses::getDressesList();

        echo '<pre>';
        print_r($dressesList);
        echo '<pre>';
    }

    public function actionOneDress(int $id)
    {
        if ($id) {
            $dress = Dresses::getDressById($id);
        }
        echo '<pre>';
        print_r($dress);
        echo '<pre>';
    }
}
