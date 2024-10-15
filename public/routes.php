<?php

use App\Controller\AppController;
use App\Controller\AutenticarController;
use App\Controller\Categorias\CadastrarController;
use App\Controller\Categorias\EditarController;
use App\Controller\Categorias\ListarController;
use App\Controller\Categorias\RemoverController;
use App\Controller\Categorias\SalvarController;
use App\Controller\Error\ErrorController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\LogoutController;
use App\Controller\Produtos\EditarProdutoController;
use App\Controller\Produtos\ListarProdutosController;
use App\Controller\Produtos\ShowEditarProdutoController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/logout' => LogoutController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => AppController::class,
        '/categorias' => ListarController::class,
        '/categorias/editar' => EditarController::class,
        '/categorias/remover' => RemoverController::class,
        '/categorias/cadastrar' => CadastrarController::class,
        '/categorias/cadastrar/salvar' => SalvarController::class,
        '/produtos' => ListarProdutosController::class,
        '/produtos/editar' => ShowEditarProdutoController::class,
        '/produtos/editar/salvar' => EditarProdutoController::class,
        '/error' => ErrorController::class,
    ],
    'default' => NotFoundController::class
];
