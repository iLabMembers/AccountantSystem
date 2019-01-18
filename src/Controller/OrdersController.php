<?php
namespace App\Controller;

use App\Controller\AppController;

class OrdersController extends AppController {

  public function index() {
    $data = $this->Orders->find('all');
    #$id = $this->request->query['id'];
    #$data = $this->Orders->get($id);
    $this->set('data',$data);
  }

  public function add() {
    $entity = $this->Orders->newEntity();
    $this->set('entity',$entity);
  }

  public function create() {
    if ($this->request->is('post')) {
      $data = $this->request->data['Orders'];
      $entity = $this->Orders->newEntity($data);
      $this->Orders->save($entity);
    }
    return $this->redirect(['action'=>'index']);
  }
}