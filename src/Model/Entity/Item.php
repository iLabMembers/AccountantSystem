<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
class Item extends Entity
{
  protected $_accessible =
  [
    'id' => true,
    'name' => true,
    'unit' => true,
    'price' => true,
    'description' => true,
    'created' => true,
    'modified' => true
  ];
}
?>
