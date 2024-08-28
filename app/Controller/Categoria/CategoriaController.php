<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Database\Query;

class CategoriaController extends AbstractController
{
  public function index(array $requestData): void
  { 
    $query = new Query();
    
    //Exclui a categoria
    if($_GET['excluir'] === 'true'){
      $query->delete(
        tabela: 'categoria',
        condicao: 'id='.$_GET['id']
      );
    }

    //Redireciona para Criar uma nova Categoria
    if($_SERVER['REQUEST_URI'] === "/app/categoria/nova"){
      $render = $this->render('categoria/nova_categoria.php',[
        'headTitle' => '- Categorias',
        'produtosActive' => 'active',
        'titulo' => 'Nova',
        'idValue' => 0,
        'nome' => '',
        'editOrSave' => 'save',
        'submitButton' => 'Salvar'
      ])[1];
      echo $render;
      exit;
    }

    //Redireciona para Editar a Catergoria
    if($_SERVER['REQUEST_URI'] === "/app/categoria/edit"){
      $render = $this->render('categoria/nova_categoria.php',[
        'headTitle' => '- Categorias',
        'produtosActive' => 'active',
        'titulo' => 'Editar',
        'idValue' => $_POST['id'],
        'nome' => $_POST['nome'],
        'editOrSave' => 'edit',
        'submitButton' => 'Atualizar'
      ])[1];
      echo $render;
      exit;
    }

    //Edita a Categoria
    if($_POST['editOrSave'] === 'edit'){
      $query->update(
        tabela: 'categoria',
        dados: [
          'nome' => $_POST['nome']
        ],
        condicao: 'id='.$_POST['id']
      );
    }

    //Adiciona uma nova Categoria
    if($_POST['editOrSave'] === 'save'){
      array_pop($requestData);
      $query->insert(
        tabela: 'categoria',
        dados: $requestData
      );
    }

    //Lista todas as Categorias
    $categorias = $query->select(
      tabela: 'categoria'
    );

    echo $this->render('categoria/categoria.php',[
      'headTitle' => '- Categorias',
      'produtosActive' => 'active'
    ])[1];

    foreach ($categorias as $categoria) {
      echo "<tr>";
      foreach ($categoria as $key => $coluna) {
        if($key === "id"){
          echo "<th scope='row'>$coluna</th>";
          continue;
        }
        echo "<td scope='row'>$coluna</td>";
      }
      echo "
            <td class='col-1 text-align-right'>
              <div class='d-flex'>
                <form action='/app/categoria/edit' method='post' class='mx-1'>
                  <input type='text' value="."{$categoria['id']}"." name='id' hidden>
                  <input type='text' value="."{$categoria['nome']}"." name='nome' hidden>
                  <button type='submit' class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i></button>
                </form>
                <form action'/app/categoria/excluir' method'post' class='mx-1 '>
                  <input type='text' value="."{$categoria['id']}"." name='id' hidden>
                  <input type='text' value='true' name='excluir' hidden>
                  <button type='submit' class='btn btn-danger btn-sm'><i class='bi bi-x'></i></button>
                </form>
              </div>
            </td></tr>";
    }
    echo "</tbody></table></div>";
  }
}