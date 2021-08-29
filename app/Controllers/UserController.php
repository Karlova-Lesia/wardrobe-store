<?php

namespace App\Controllers;

use App\Models\User;
use Framework\Core\Controller;
use Framework\Core\View;
use Framework\Session\Session;

class UserController extends Controller
{
    public function actionRegister(): void
    {
        $name = '';
        $lastname = '';
        $email = '';
        $password = '';
        $passwordConfirm = '';
        $errors = false;

        if ($this->getPost()) {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConfirm = $_POST['password_confirm'];


            if (!User::checkName($name)) {
                $errors[] = "Неправильний формат імені!";
            }

            if (!User::checkLastname($lastname)) {
                $errors[] = "Неправильний формат прізвища!";
            }

            if (!User::checkEmail($email)) {
                $errors[] = "Неправильний формат email!";
            }

            if (User::checkEmailExist($email)) {
                $errors[] = "Такий email уже існує!";
            }

            if (!User::checkPassword($password)) {
                $errors[] = "Довжина пароля має сягати більше 7 символів!";
            }

            if (!User::checkConfigPass($password, $passwordConfirm)) {
                $errors[] = "Невірно повторили пароль!";
            }

            if ($errors == false) {
                User::register($name, $lastname, $email, $password);
                $this->redirect("/");
            }
        }
        echo View::render('registrationPage', ['name' => $name, 'lastname' => $lastname,
            'email' => $email, 'password' => $password, 'passwordConfirm' => $passwordConfirm,
            'errors' => $errors]);
    }

    /**
     * @throws \Exception
     */
    public function actionLogin(): void
    {
        $email = '';
        $password = '';

        if ($this->getPost()) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userId = User::checkUserData($email, $password);

            if ($userId === false) {
                $this->redirect("/user/login");
            } else {
                User::auth($userId);
                $this->redirect("/cabinet");
            }
        }
        echo View::render('authorizationPage', ['email' => $email, 'password' => $password]);
    }

    /**
     * @throws \Exception
     */
    public function actionLogout(): void
    {
        Session::destroy();
        $this->redirect('/');
    }
}
