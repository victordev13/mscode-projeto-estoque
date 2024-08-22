<?php

namespace App\Controller;

use App\Model\Usuario;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();
        $usuario = $usuarioConexao->buscarPorEmail($requestData['email']);
        if (null === $usuario) {
            $this->redirect('/error');
        }

        // lógica para fazer login
        // redirecionar para painel
        $this->redirect('/app');
    }
}
