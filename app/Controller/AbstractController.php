<?php

namespace App\Controller;

abstract class AbstractController
{
    public function include(string $viewName): void
    {
        require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName);
    }

    /** Deve fazer o include da view */
    abstract public function index(array $requestData): void;
}
