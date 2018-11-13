<?php
namespace App\Controller;

use App\Controller\AppController;

class ItemCellController extends AppController{

 public function index(){
   $helpers = array('JavaScript');
   $this->viewBuilder()->AutoLayout(false);
   $this->set('title','Hello');
  }
}
