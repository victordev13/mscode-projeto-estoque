<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('error.php');
    }
}
