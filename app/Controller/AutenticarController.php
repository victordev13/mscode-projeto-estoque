<?php

namespace App\Controller;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        // lógica para fazer login
        // redirecionar para painel
        $this->redirect('/app');
    }
}
