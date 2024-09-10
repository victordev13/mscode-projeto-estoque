<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Categoria;
use App\Model\Produto;

class EditarProdutoController extends AbstractController
{
  public function index(array $requestData): void
  {
    $id = $requestData['id'];

    $model = new Produto();
    $categorias = new Categoria();
    $categorias = $categorias->listar();
    $produto = $model->buscar($id);
    if (empty($produto)) {
      $this->redirect('/app/estoque');
      exit;
    }

    $this->renderComHeader('estoque/add.php', [
      'produto' => $produto,
      'categoria' => $categorias,
      'headTitle' => '- Produtos',
      'produtosActive' => 'active'
    ])[0];
  }
}
