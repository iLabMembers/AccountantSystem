<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
class Item extends Entity
{
  protected $_accessible =
  [
    'id' => true,
    'category'=>true,
    'name' => true,
    'unit' => true,
    'price' => true,
    'description' => true,
    'path' => true,
    'created' => true,
    'modified' => true,
  ];
}
?>
