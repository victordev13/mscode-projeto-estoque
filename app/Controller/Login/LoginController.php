<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;

class LoginController extends AbstractController
{
    public function index(array $data): void
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . 'login/login.php';
    }
}
