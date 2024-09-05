<?php

namespace App\Controller\Categoria;


use App\Controller\AbstractController;

class CadastrarController extends AbstractController
{
    public function index(array $requestData): void
    {

      echo $this->render('categoria/nova_categoria.php',[
        'headTitle' => '- Categorias',
        'produtosActive' => 'active',
        'titulo' => 'Nova',
        'idValue' => 0,
        'nome' => '',
        'editOrSave' => 'save',
        'submitButton' => 'Salvar'
      ])[1];
    }
}