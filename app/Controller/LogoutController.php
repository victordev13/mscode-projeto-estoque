<?php

namespace App\Controller;

class LogoutController extends AbstractController
{
    public function index(array $data): void
    {
        session_destroy();

        $this->redirect('/login');
    }
}
