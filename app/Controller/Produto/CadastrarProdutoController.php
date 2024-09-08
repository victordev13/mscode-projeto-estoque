<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;

class CadastrarProdutoController extends AbstractController
{
  public function index(array $requestData): void
  {
    $this->renderComHeader('estoque/add.php', [
      'headTitle' => '- Produtos',
      'produtosActive' => 'active'
    ]);
  }
}
