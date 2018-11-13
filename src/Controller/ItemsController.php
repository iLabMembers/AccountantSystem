<?php
namespace App\Controller;
use App\Controller\AppController;
class ItemsController extends AppController
{
  function index()
  {
    $this->viewBuilder()->autoLayout(true);
    $data = $this->Items->find('all');
    $this->set('data',$data);
  }

  function add(){
    $this->viewBuilder()->autoLayout(true);
    $this->set('entity',$entity);
  }

  function create(){
    if($this->request->is('post')){
      $data = $this->request->data['Items'];
      $entity = $this->Items->newEntity($data);
      $this->Items->save($entity);
    }
    return $this->redirect(['action'=>'index']);
  }

  function edit(){
    $id=$this->request->query['id'];
    $entity = $this->Items->get($id);
    $this->set('entity',$entity);
  }

  function update(){
    if($this->request->is('post')){
      $data = $this->request->data['Items'];
      $entity = $this->Items->get($data['id']);
      $this->Items->PatchEntity($entity,$data);
      $this->Items->save($entity);
    }
    return $this->redirect(['action'=>'index']);
  }


  function remove(){
  }

  function destroy(){
  }




}
?>
