<?php

use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class
    ],
    'default' => NotFoundController::class
];
