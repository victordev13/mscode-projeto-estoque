<?php

use App\Controller\Login\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\Login\LoginController;
use App\Controller\AppController;
use App\Controller\Categoria\CategoriaController;
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
        '/app/categoria' => CategoriaController::class,
        '/app/categoria/nova' => CategoriaController::class,
        '/app/venda' => VendasController::class,
        '/app/venda/nova' => VendasController::class,
    ],
    'default' => NotFoundController::class
];
