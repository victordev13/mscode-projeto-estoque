<?php

namespace App\Controller;

abstract class AbstractController
{
    public function __construct()
    {
        session_start();
    }
    public function render(string $viewName, array $data = []): array
    {   
        $header = file_get_contents(__DIR__.'/../../public/view/includes/header.php');
        $footer = file_get_contents(__DIR__.'/../../public/view/includes/footer.php');
        $file = __DIR__.'/../../public/view/'.$viewName;
        $file = file_exists($file) ? file_get_contents($file) : '';

        $keys = array_keys($data);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);
        
        $pagCompleta = $header . $file . $footer;

        return [
            require_once $_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName,
            str_replace($keys, array_values($data), $pagCompleta)
        ]; 
    }

    public function showJson(array $data): never
    {
        header("Content-Type: application/json");
        echo json_encode($data);
        die();
    }

    public function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    /** Deve fazer o include da view */
    abstract public function index(array $requestData): void;
}
