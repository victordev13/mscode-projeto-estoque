<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;
use App\Model\Usuario;

class CadastrarUsuarioController extends AbstractController
{
  public function index(array $requestData): void
  {
    foreach ($requestData as $item) {
      if ($item == null) {
        $this->render('login/cadastro.php', ['error' => true, 'message' => 'Preencha todos os campos!']);
        return;
      }
    }
    $user = new Usuario();
    $emailUser = $user->buscarPorEmail($requestData['email']);

    if ($emailUser) {
      $this->render('login/cadastro.php', ['error' => true, 'message' => 'E-mail já cadastrado!']);
      exit;
    }
    $passHash = password_hash($requestData['password'], PASSWORD_DEFAULT);

    $user->cadastrar($requestData['nome'], $requestData['email'], $passHash);

    $this->render('login/cadastro.php', ['error' => false, 'message' => 'Cadastrado com sucesso!']);
  }
}
