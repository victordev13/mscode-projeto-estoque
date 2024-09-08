<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto;

class EditarProdutoController extends AbstractController
{
  public function index(array $requestData): void
  {
    $id = $requestData['id'];

    $model = new Produto();
    $produto = $model->buscar($id);
    if (empty($produto)) {
      $this->redirect('/app/estoque');
      exit;
    }

    $this->renderComHeader('estoque/add.php', [
      'produto' => $produto,
      'headTitle' => '- Produtos',
      'produtosActive' => 'active'
    ])[0];
  }
}
