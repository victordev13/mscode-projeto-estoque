<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria;

class ListarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Categoria();
        $categorias = $model->listar();

        $this->render('categoria/categoria.php',[
          'headTitle' => '- Categorias',
          'produtosActive' => 'active',
          'categorias' => $categorias
        ])[0];

    }
}