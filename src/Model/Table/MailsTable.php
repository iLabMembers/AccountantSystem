<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class MailsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);
    $this -> setTable('mails');
    $this -> setDisplayField('subject');
    $this -> setPrimaryKey('id');
  }
}
?>