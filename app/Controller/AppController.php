<?php

namespace App\Controller;

class AppController extends AbstractController
{ 
  public function index(array $data): void
  {
    
    $this->render('app.php');
  }
}
