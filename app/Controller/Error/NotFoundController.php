<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

class NotFoundController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('404.php');
    }
}
