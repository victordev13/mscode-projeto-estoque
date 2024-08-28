<?php

namespace App\Controller;

use App\Database\Query;

class EstoqueController extends AbstractController
{
  public function index(array $data): void
  {
    $query = new Query();
    $produtos = $query->select(
      tabela: 'produto',
      colunas: 'id,nome,descricao,valor'
    );

    echo $this->render('produtos.php',[
      'headTitle' => '- Estoque',
      'produtosActive' => 'active'
    ])[1];

    foreach ($produtos as $produto) {
      echo "<tr>";
      foreach ($produto as $key => $coluna) {
        if($key === "id"){
          echo "<th scope'row'>$coluna</th>";
          continue;
        }
        echo "<td scope='row'>$coluna</td>";
      }
      echo "<td class='col-2 text-align-right'>
              <button class='btn btn-primary btn-sm'><i class='bi bi-plus'></i></button>
              <button class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i></button>
              <button class='btn btn-danger btn-sm'><i class='bi bi-x'></i></button>
            </td>";
      echo "</tr>";
    }
    echo "</tbody></table></div>";
  }
}
