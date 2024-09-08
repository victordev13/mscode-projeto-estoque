<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;
use App\Model\Usuario;

class CadastrarUsuarioController extends AbstractController
{
  public function index(array $requestData): void
  {
    $user = new Usuario();
    $emailUser = $user->buscarPorEmail($requestData['email']);
    
    if ($emailUser) {
      $this->render('login/cadastro.php', ['error' => true]);
      exit;
    }
    $passHash = password_hash($requestData['password'], PASSWORD_DEFAULT);

    $user->cadastrar($requestData['nome'], $requestData['email'], $passHash);

    $this->render('login/cadastro.php', ['error' => false]);
  }
}
