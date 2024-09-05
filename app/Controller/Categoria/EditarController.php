<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria;

class EditarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $id = $requestData['id'];

        $model = new Categoria();
        $categoria = $model->buscar($id);

        echo $this->render('categoria/nova_categoria.php',[
          'headTitle' => '- Categorias',
          'produtosActive' => 'active',
          'titulo' => 'Editar',
          'idValue' => $_POST['id'],
          'nome' => $_POST['nome'],
          'editOrSave' => 'edit',
          'submitButton' => 'Atualizar',
          'categoria'=> $categoria
        ])[1];
    }
}