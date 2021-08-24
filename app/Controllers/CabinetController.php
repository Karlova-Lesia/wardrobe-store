<?php

namespace App\Controllers;

use App\Models\User;
use Framework\Core\View;

class CabinetController
{
    /**
     * @throws \Exception
     */
    public function actionIndex(): void
    {
        $userId = User::checkLogged();
        echo View::render('cabinetPage', []);
    }
}