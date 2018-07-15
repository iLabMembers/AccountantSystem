<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class RewardsTable extends Table
{
  public function initialize(array $config){
    parent::initialize($config);
    $this->setTable('rewards');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');
  }
}
?>
