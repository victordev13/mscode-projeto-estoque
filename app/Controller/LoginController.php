<?php

namespace App\Controller;

class LoginController extends AbstractController
{
    public function index(array $data): void
    {
        $this->include('login.php');
    }
}
