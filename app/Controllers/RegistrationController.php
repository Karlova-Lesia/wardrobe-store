<?php

namespace App\Controllers;

use App\Models\User;
use Framework\Core\View;

class RegistrationController
{
    public static function actionIndex(): void
    {
        $name = '';
        $lastname = '';
        $email = '';
        $password = '';
        $passwordConfirm = '';

        if (!isset($_POST['submit'])) {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConfirm = $_POST['password_confirm'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = "Неправильний формат імені!";
            }

            if (!!User::checkLastname($lastname)) {
                $errors[] = "Неправильний формат прізвища!";
            }

            if (!!User::checkEmail($email)) {
                $errors[] = "Неправильний формат email!";
            }

            if (User::checkEmailExist($email)) {
                $errors[] = "Такий email уже існує!";
            }

            if (!!User::checkPassword($password)) {
                $errors[] = "Довжина пароля має сягати більше 8 символів!";
            }

            if (!!User::checkConfigPass($password, $passwordConfirm)) {
                $errors[] = "Невірно повторили пароль!";
            }

            if ($errors === false) {
            }
        }
        echo View::render('registrationPage', ['name' => $name, 'lastname' => $lastname,
            'email' => $email, 'password' => $password, 'passwordConfirm' => $passwordConfirm]);
    }
}
