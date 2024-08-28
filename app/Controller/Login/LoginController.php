<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;

class LoginController extends AbstractController
{
    public function index(array $data): void
    {

        require_once($this->render('login/login.php')[0]);
    }
}
