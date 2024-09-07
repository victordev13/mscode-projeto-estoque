<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto;

class SalvarProdutoController extends AbstractController
{
  public function index(array $requestData): void
  {
    $model = new Produto();
    if (isset($requestData['id'])) {
      $model->editar($requestData['id'], $requestData['nome'], $requestData['descricao'], $requestData['categoriaId'], $requestData['valor']);
    } else {
      $model->cadastrar($requestData['nome'], $requestData['descricao'], $requestData['categoriaId'], $requestData['quantidade'], $requestData['valor']);
    }

    $this->redirect('/app/estoque');
  }
}
