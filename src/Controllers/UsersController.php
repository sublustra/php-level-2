<?php

namespace MyApp\Controllers;

use MyApp\Auth;

class UsersController extends Controller
{

    public function actionIndex()
    {
        $user = Auth::getUser();

        if (!$user) {
            $this->redirect('/users/login');
        }

        print_r(Auth::getUser());
    }
    public function actionLogin()
    {
        $error = null;

        if (isset($_POST['login'], $_POST['pass'])) {
            if (Users::check($_POST['login'], $POST['pass'])) {
                Auth::login($_POST['login']);
                $this->redirect('/users');
            } else {
                $error = true;
            }
        }

        $this->render('users/login.twig', [
            'error' => $error,
        ]);
    }

    public function actionLogout()
    {
        Auth::logout();
        $this->redirect('/users/login');
    }
}
