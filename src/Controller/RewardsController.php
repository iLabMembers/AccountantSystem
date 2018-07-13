<?php
namespace App\Controller;
use App\Controller\AppController;
class RewardsController extends AppController
{
  function index()
  {
    $data = $this->Rewards->find('all');
    $this->set('data',$data);
  }
}

 ?>
