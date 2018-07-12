<?php
namespace App\Controller;
use App\Controller\AppController;
/**
 *
 */
class UsersController extends AppController
{

  function index()
  {
    // $id = $this->request->query['id'];
    $data = $this->Users->find('all');
    $this->set('data',$data);
  }
}

 ?>
