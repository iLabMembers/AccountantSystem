<?php
namespace App\Controller;
use App\Controller\AppController;
class ItemsController extends AppController
{
  function itemregister($id = null){
    $this->viewBuilder()->autoLayout(true);
    $data = $this->Items->find('all');
    $this->set('data',$data);
    if ($id == 1) {
      $this->Flash->success('データの追加に成功しました。');
    }elseif ($id == 2) {
      $this->Flash->success('データの編集に成功しました。');
    }elseif ($id == 3) {
      $this->Flash->success('データの削除に成功しました。');
    }
  }

  function add(){
    $this->viewBuilder()->autoLayout(true);
    $entity = $this->Items->newEntity();
    $this->set('entity',$entity);
  }

  function create(){
    if($this->request->is('post')){
      $data = $this->request->data['Items'];
      $entity = $this->Items->newEntity($data);
      $this->Items->save($entity);
    }
    return $this->redirect(['action'=>'itemregister',1]);
  }

  function createFromCsv(){

    return $this->redirect(['action'=>'itemregister',1]);
  }

  function edit(){
    $this->viewBuilder()->autoLayout(true);
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
    return $this->redirect(['action'=>'itemregister',2]);
  }

  function remove(){
    $this->viewBuilder()->autoLayout(true);
    $id = $this->request->query['id'];
    $entity = $this->Items->get($id);
    $this->set('entity',$entity);
  }

  function destroy(){
    if($this->request->is('post')){
      $data = $this->request->data['Items'];
      $entity = $this->Items->get($data['id']);
      $this->Items->delete($entity);
    }
    return $this->redirect(['action'=>'itemregister',3]);
  }

}
?>
