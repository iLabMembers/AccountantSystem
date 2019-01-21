<?php
namespace App\Controller;
use App\Controller\AppController;


class ItemsController extends AppController
{

  public function initialize(){
    parent::initialize();
    $this->loadComponent('FileUpLoader');
  }

  function itemregister($id = null){
    $this->viewBuilder()->autoLayout(true);
    $data = $this->Items->find('all');
    $this->set('data', $data);
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
    $this->set('entity', $entity);
  }

  function create(){
    $dir = realpath(WWW_ROOT.'/img/items');
    $limitFileSize = 1024*1024;
    if ($this->request->is('post')) {
      $data = $this->request->data;
      $entityData = $data['Items'];
      $nextId = 1;
      try{
        $preEntity = $result=$this->Items
                  ->find('all',['fields'=>'id'])
                  ->last()->id;
        $nextId = (string)(int)$preEntity + 1;
      }catch(RuntimeException $e){

      }
      $this->log(gettype($preEntity),LOG_DEBUG);
      try{
        $image = $data['image_jpeg'];
        $fileName = $this->FileUpLoader->fileUpload($image, $nextId, $dir, $limitFileSize);
        $path = 'items/'.$fileName;
        $entityData = $entityData + array('path' => $path);
      }catch(RuntimeException $e){
        return $this->redirect(['action'=>'itemregister', 4]);
      }
      $entity = $this->Items->newEntity($entityData);
      $this->Items->save($entity);
    }
    return $this->redirect(['action'=>'itemregister', 1]);
  }

  function createFromCsv(){
    $data = $this->request->data;
    try{
      $this->log($data, LOG_DEBUG);
      $csv = $data['data_csv'];
      $csvData = $this->FileUpLoader->fileUpload($csv);
      // $this->log($csvData);
      for ($i=1; $i < count($csvData) ; $i++) {
        $this->log($csvData[$i]);
        $item = array(
          "name" => $csvData[$i][0],
          "category" => $csvData[$i][1],
          "unit" => $csvData[$i][2],
          "price" => $csvData[$i][3],
          "description" => $csvData[$i][4]
        );
        $entity = $this->Items->newEntity($item);
        $this->Items->save($entity);
      }
    }catch(RuntimeException $e){
      return $this->redirect(['action'=>'itemregister', 4]);
    }
    return $this->redirect(['action'=>'itemregister', 1]);
  }

  function edit(){
    $this->viewBuilder()->autoLayout(true);
    $id=$this->request->query['id'];
    $entity = $this->Items->get($id);
    $this->set('entity', $entity);
  }

  function update(){
    $dir = realpath(WWW_ROOT.DS.'img'.DS.'items');
    $limitFileSize = 1024*1024;
    if($this->request->is('post')){
      $data = $this->request->data;
      $entityData = $data['Items'];
      $entity = $this->Items->get($data['Items']['id']);
      try{
        $image = $data['image_jpeg'];
        $this->log($data, LOG_DEBUG);
        $fileName = $this->FileUpLoader->fileUpload($image, $entity->id, $dir, $limitFileSize);
        $path = 'items/'.$fileName;
        $entityData =  $entityData + array('path' => $path);
      }catch(RuntimeException $e){
        return $this->redirect(['action'=>'itemregister', 2]);
      }
      $this->Items->PatchEntity($entity, $entityData);
      $this->Items->save($entity);
    }
    return $this->redirect(['action'=>'itemregister', 2]);
  }

  function remove(){
    $this->viewBuilder()->autoLayout(true);
    $id = $this->request->query['id'];
    $entity = $this->Items->get($id);
    $this->set('entity', $entity);
  }

  function destroy(){
    if($this->request->is('post')){
      $data = $this->request->data['Items'];
      $entity = $this->Items->get($data['id']);
      $this->Items->delete($entity);
    }
    return $this->redirect(['action'=>'itemregister', 3]);
  }

}
?>
