<?php

namespace App\Controllers;

use Framework\Helpers\ChangePages;

class RegistrationController
{
    public static function index(): void
    {
        ChangePages::render('registrationPage');
    }

}
