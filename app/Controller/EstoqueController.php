<?php

namespace App\Controller;

class EstoqueController extends AbstractController
{
  public function index(array $data): void
  {

    $this->render('produtos.php');
  }
}
