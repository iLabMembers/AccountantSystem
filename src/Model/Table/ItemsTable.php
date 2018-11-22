<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class ItemsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);
    $this->addBehavior('Timestamp');
    $this -> setTable('items');
    $this -> setDisplayField('name');
    $this -> setPrimaryKey('id');
  }
}
?>
