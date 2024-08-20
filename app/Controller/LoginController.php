<?php

namespace App\Controller;

class LoginController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('login.php');
    }
}
