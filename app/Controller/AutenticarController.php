<?php

namespace App\Controller;

use App\Model\Usuario;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();
        $usuario = $usuarioConexao->buscarPorEmail($requestData['email']);
        if (empty($usuario)) {
            $this->redirectToError('Usuário e/ou senha inválidos');
        }

        if (! password_verify($requestData['senha'], $usuario['senha'])) {
            $this->redirectToError('Usuário e/ou senha inválidos');
        }

        $_SESSION['usuarioEstaLogado'] = true;
        $_SESSION['email'] = $requestData['email'];

        $this->redirect('/app');
    }
}
