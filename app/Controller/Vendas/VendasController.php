<?php

namespace App\Controller\Vendas;

use App\Controller\AbstractController;

class VendasController extends AbstractController
{
  public function index(array $data): void
  {
    if($_SERVER['REQUEST_URI'] === "/app/venda"){
      echo $this->render('vendas/vendas_realizadas.php',[
        'headTitle' => '- Vendas',
        'vendasActive' => 'active',
      ])[1];
      exit;
    }
    echo $this->render('vendas/nova_venda.php',[
      'headTitle' => '- Nova Venda',
      'vendasActive' => 'active'
    ])[1];
  }
}
