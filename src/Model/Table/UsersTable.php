<?php
namespace App\Model\Table;
use Cake\ORM\Table;

/**
 *
 */
class UsersTable extends Table
{

  public function initialize(array $config){
    parent::initialize($config);
    $this->setTable('users');
    $this->setDisplayField('first_name');
    $this->setPrimaryKey('id');
  }
}


 ?>
