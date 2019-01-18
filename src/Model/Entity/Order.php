<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Order extends Entity {

  protected $_accessible = [
    'user_id' => true,
    'item_id' => true,
    'num' => true,
    'total' => true,
    'created' => true,
    'updated' => true
  ];
}
?>