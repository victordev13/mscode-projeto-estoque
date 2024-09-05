<?php

namespace App\Controller;

use App\Model\Usuario;

class AppController extends AbstractController
{ 
  public function index(array $data): void
  {

    $usuario = new Usuario();
    $nome = $usuario->buscarPorEmail($_SESSION['email'])[0]['nome'];

    if($_SESSION['usuarioLogado'] === false){
      $this->redirect('/login');
    }

    echo $this->render('app.php', [
      'headTitle' => '- App',
      'inicioActive' => 'active',
      'nome' => $nome
    ])[1];
  }
}
