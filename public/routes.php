<?php

use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\AppController;
use App\Controller\EstoqueController;

$router = [
    'routes' => [
        '' => LoginController::class,
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => AppController::class,
        '/app/estoque' => EstoqueController::class
    ],
    'default' => NotFoundController::class
];
