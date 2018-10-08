<?php
namespace App\controller;
use App\Controller\AppController;

class CardsController extends AppController {

  public function index()
  {
    $data = $this->Cards->find('all');
    $this->set('data', $data);
  }
}