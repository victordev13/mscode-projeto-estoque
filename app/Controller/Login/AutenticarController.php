<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;
use App\Model\Usuario;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        foreach ($requestData as $item) {
            if ($item == null) {
                $this->render('login/login.php', ['error' => 'Preencha todos os campos']);
                return;
            }
        }

        $usuarioConexao = new Usuario();
        $usuario = $usuarioConexao->buscarPorEmail($requestData['email'])[0];
        if ($usuario === null) {
            $this->render('login/login.php', ['error' => 'Email ou senha invalidos']);
        }

        if (password_verify($requestData['password'], $usuario['senha'])) {
            $id = $usuarioConexao->buscarPorEmail($requestData['email'])[0]['id'];
            $_SESSION['usuarioLogado'] = true;
            $_SESSION['email'] = $requestData['email'];
            $_SESSION['id'] = $id;
            $this->redirect('/app');
        }

        $this->render('login/login.php', ['error' => 'Email ou senha invalidos']);
    }
}
