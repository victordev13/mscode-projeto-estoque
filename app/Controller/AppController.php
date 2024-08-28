<?php

namespace App\Controller;

use App\Model\Usuario;

class AppController extends AbstractController
{ 
  public function index(array $data): void
  {

    $usuario = new Usuario();
    $nome = $usuario->buscarPorEmail($_SESSION['email']);
    $nome = $nome[0]['nome'];

    $render = $this->render('app.php', [
      'nome' => $nome
    ]);

    require_once __DIR__.'../../../public/view/includes/header.php';
    echo $render[1];
    require_once __DIR__.'../../../public/view/includes/footer.php';
  }
}
