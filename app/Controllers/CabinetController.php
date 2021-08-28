<?php

namespace App\Controllers;

use App\Models\User;
use Framework\Core\Controller;
use Framework\Core\View;

class CabinetController extends Controller
{
    /**
     * @throws \Exception
     */
    public function actionIndex(): void
    {
        $userId = User::checkLogged();
        $user = (new User())->getUserById($userId)->user;

        echo View::render('cabinetPage', ['user' => $user]);
    }

    /**
     * @throws \Exception
     */
    public function actionEdit(): void
    {
        $userId = User::checkLogged();

        $user = (new User())->getUserById($userId)->user;

        $lastname = $user['lastname'];
        $password = $user['password'];
        $passwordConfirm = '';

        $result = false;
        $errors = false;

        if ($this->getPost()) {
            $lastname = $_POST['lastname'];
            $password = $_POST['password'];
            $passwordConfirm = $_POST['password_confirm'];

            if (!User::checkLastname($lastname)) {
                $errors[] = "Неправильний формат прізвища!";
            }

            if (!User::checkPassword($password)) {
                $errors[] = "Довжина пароля має сягати більше 7 символів!";
            }
            if (!User::checkConfigPass($password, $passwordConfirm)) {
                $errors[] = "Невірно повторили пароль!";
            }

            if ($errors == false) {
                $result = User::edit($userId, $lastname, $password);
                $this->redirect("/");
            }
        }

        echo View::render('editPage', ['lastname' => $lastname, 'password' => $password,
            'passwordConfirm' => $passwordConfirm, 'result' => $result, 'errors' => $errors]);
    }
}
