<?php

namespace App\Controller;

class LogoutController extends AbstractController
{
    public function index(array $data): void
    {
       unset($_SESSION['NOME']);

        $this->redirect('/login');
    }
}
