<?php
namespace App\Controller;
use App\Controller\AppController;
class ItemsController extends AppController
{
  function index()
  {
    $data = $this->Items->find('all');
    $this->set('data', $data);
  }
}
?>