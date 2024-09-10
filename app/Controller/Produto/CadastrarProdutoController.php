<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Categoria;

class CadastrarProdutoController extends AbstractController
{
  public function index(array $requestData): void
  {

    $categorias = new Categoria();
    $categorias = $categorias->listar();

    $this->renderComHeader('estoque/add.php', [
      'categoria' => $categorias,  
      'headTitle' => '- Produtos',
      'produtosActive' => 'active'
    ]);
  }
}
