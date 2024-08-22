<?php

use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class
    ],
    'default' => NotFoundController::class
];
