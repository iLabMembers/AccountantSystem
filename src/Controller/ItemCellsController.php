<?php
namespace App\Controller;

use App\Controller\AppController;

class ItemCellsController extends AppController{

 public function index(){
   $this->viewBuilder()->AutoLayout(false);
   $this->set('title','Hello');
   
  }
}
