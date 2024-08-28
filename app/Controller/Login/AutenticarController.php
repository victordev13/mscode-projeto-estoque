<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;
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

        if(password_verify($requestData['password'], $usuario[0]['senha'])){
            $id = $usuarioConexao->buscarPorEmail($requestData['email']);
            $_SESSION['usuarioLogado'] = true;
            $_SESSION['email'] = $requestData['email'];
            $_SESSION['id'] = $id[0]['id'];
            $this->redirect('/app');
        }

        $this->redirect('/error');
    }
}
