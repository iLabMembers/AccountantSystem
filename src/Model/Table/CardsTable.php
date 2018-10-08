<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CardsTable extends Table
{
  parent::initialize($config);
  $this->setTable('cards');
  $this->setDisplayField('card_name');
  $this->setPrimaryKey('id');
}