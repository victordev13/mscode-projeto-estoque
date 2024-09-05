<?php

use App\Controller\Login\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\Login\LoginController;
use App\Controller\AppController;
use App\Controller\Categoria\CadastrarController;
use App\Controller\Categoria\EditarController;
use App\Controller\Categoria\ListarController;
use App\Controller\Categoria\RemoverController;
use App\Controller\Categoria\SalvarController;
use App\Controller\EstoqueController;
use App\Controller\Vendas\VendasController;

$router = [
    'routes' => [
        '' => LoginController::class,
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => AppController::class,
        '/app/estoque' => EstoqueController::class,
        '/app/estoque/add' => EstoqueController::class,
        '/app/estoque/edit' => EstoqueController::class,
        '/app/estoque/excluir' => EstoqueController::class,
        '/app/categoria' => ListarController::class,
        '/app/categoria/nova' => CadastrarController::class,
        '/app/categoria/nova/salvar' => SalvarController::class,
        '/app/categoria/edit' => EditarController::class,
        '/app/categoria/excluir' => RemoverController::class,
        '/app/venda' => VendasController::class,
        '/app/venda/nova' => VendasController::class,
    ],
    'default' => NotFoundController::class
];
