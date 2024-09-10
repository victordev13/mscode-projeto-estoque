<?php

namespace App\Controller\Produto;

use App\Model\Produto;
use App\Controller\AbstractController;
use App\Model\Categoria;

class ListarProdutoController extends AbstractController
{
  public function index(array $requestData): void
  {
    $model = new Produto();
    $categorias = new Categoria();
    $produtos = $model->listar();
    $categorias = $categorias->listar();

    $this->renderComHeader('estoque/produtos.php', [
      'categorias' => $categorias,
      'produtos' => $produtos,
      'headTitle' => '- Produtos',
      'produtosActive' => 'active'
    ]);
  }
}
