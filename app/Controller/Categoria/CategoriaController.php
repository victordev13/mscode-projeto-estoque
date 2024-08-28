<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Database\Query;

class CategoriaController extends AbstractController
{
  public function index(array $data): void
  {

    $query = new Query();
    $categorias = $query->select(
      tabela: 'categoria'
    );

    if($_SERVER['REQUEST_URI'] === "/app/categoria/nova"){
      require_once($this->render('categoria/nova_categoria.php')[0]);
      exit;
    }

    require_once($this->render('categoria/categoria.php')[0]);
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
              <button class='btn btn-secondary btn-sm'><i class='bi bi-pencil'></i></button>
              <button class='btn btn-danger btn-sm'><i class='bi bi-x'></i></button>
            </td>";
      echo "</tr>";
    }
  }
}