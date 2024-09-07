<?php

namespace App\Controller;

use App\Model\Usuario;

class AppController extends AbstractController
{
  public function index(array $data): void
  {

    $usuario = new Usuario();
    $nome = $usuario->buscarPorEmail($_SESSION['email'])[0]['nome'];

    if ($_SESSION['usuarioLogado'] === false) {
      $this->redirect('/login');
    }

    $this->render('app.php', [
      'nome' => $nome,
      'headTitle' => '- App',
      'inicioActive' => 'active'
    ]);
  }
}
