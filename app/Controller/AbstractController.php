<?php

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName, array $data = []): void
    {
        require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName);
    }

    public function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    /** Deve fazer o include da view */
    abstract public function index(array $requestData): void;
}
