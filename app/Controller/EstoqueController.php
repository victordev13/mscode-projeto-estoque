<?php

namespace App\Controller;

use App\Database\Query;

class EstoqueController extends AbstractController
{
  public function index(array $data): void
  {
    $query = new Query();

    $this->addButton([
      'headTitle' => '- Estoque',
      'produtosActive' => 'active',
      'title' => 'Novo',
      'submitButton' => 'Salvar',
      'nome' => '',
      'descricao' => '',
      'categoriaId' => '',
      'quantidade' => '',
      'valor' => '',
    ]);

    $this->editButton([
      'headTitle' => '- Estoque',
      'produtosAcive' => 'active',
      'title' => 'Editar',
      'submitButton' => 'Atualizar',
      'nome' => $_POST['nome'],
      'descricao' => $_POST['descricao'],
      'categoriaId' => $_POST['categoriaId'],
      'quantidade' => $_POST['quantidade'],
      'valor' => $_POST['preco'],
    ]);

    $this->excluirButton([
    ]);

    
    // if($data['id']){
    //   $query->update(
    //     tabela: 'produto',
    //     dados: [
    //       'nome' => $_POST['nome'],
    //       'descricao' => $_POST['descricao'],
    //       'valor' => $_POST['preco']
    //     ],
    //     condicao: 'id='.$_POST['id']
    //   );
    // }
    
    $produtos = $query->select(
      tabela: 'produto',
      colunas: 'id,nome,descricao,categoria_id,valor,quantidade_disponivel,quantidade_inicial'
    );

    $this->render('estoque/produtos.php',)[0];

  //   foreach ($produtos as $produto) {
  //     echo "<tr>";
  //     foreach ($produto as $key => $coluna) {
  //       if($key === "id"){
  //         echo "<th scope'row'>$coluna</th>";
  //         continue;
  //       }
  //       if($key === "valor"){
  //         echo "<td scope'row'>R$ $coluna,00</th>";
  //         continue;
  //       }
  //       if($key === 'quantidade_inicial') continue;
  //       echo "<td scope='row'>$coluna</td>";
  //     }
  //     $produto = str_replace(' ','-', $produto);
  //     echo "<td class='col-2 text-align-right'>
  //             <div class='d-flex'>
  //               <form class='mx-1' action='/app/estoque/add' method='post'>
  //                 <button type='submit' class='btn btn-primary btn-sm'><i class='bi bi-plus'></i></button>
  //               </form>
  //               <form class='mx-1' action='/app/estoque/edit' method='post'>
  //                 <input type='text' value="."{$produto['nome']}"." name='nome' hidden>
  //                 <input type='text' value="."{$produto['descricao']}"." name='descricao' hidden>
  //                 <input type='text' value="."{$produto['categoria_id']}"." name='categoriaId' hidden>
  //                 <input type='text' value="."{$produto['valor']}"." name='preco' hidden>
  //                 <input type='text' value="."{$produto['quantidade_inicial']}"." name='quantidade' hidden>
  //                 <button type='submit' class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i></button>
  //               </form>
  //               <form class='mx-1' action='/app/estoque/excluir' method='post'>
  //                 <button type='submit' class='btn btn-danger btn-sm'><i class='bi bi-x'></i></button>
  //               </form>
  //               <form class='mx-1' action='/app/estoque/vender' method='post'>
  //                 <button type='submit' class='btn btn-primary btn-sm'>Vender</button>
  //               </form>
  //             </div>
  //           </td>";
  //     echo "</tr>";
  //   }
  }

  private function addButton(array $dados): void
  {
    if($_SERVER['REQUEST_URI'] === "/app/estoque/add"){
      echo $this->render("/estoque/add.php",$dados)[1];
      exit;
    }
  }

  private function editButton(array $dados): void
  {
    if($_SERVER['REQUEST_URI'] === "/app/estoque/edit"){
      echo $this->render("/estoque/add.php",$dados)[1];
      exit;
    }
  }

  private function excluirButton(array $dados): void
  {
    if($_SERVER['REQUEST_URI'] === "/app/estoque/excluir"){
      echo $this->render("/estoque/excluir.php", $dados)[1];
      exit;
    }
  }
}
