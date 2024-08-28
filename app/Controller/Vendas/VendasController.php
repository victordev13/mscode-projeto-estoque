<?php

namespace App\Controller\Vendas;

use App\Controller\AbstractController;

class VendasController extends AbstractController
{
  public function index(array $data): void
  {
    if($_SERVER['REQUEST_URI'] === "/app/venda"){
      require_once($this->render('vendas/vendas_realizadas.php')[0]);
      exit;
    }
    require_once($this->render('vendas/nova_venda.php')[0]);
  }
}
