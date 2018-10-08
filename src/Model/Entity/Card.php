<?php
namespace APP\Model\Entity;

use Cake\ORM\Entity;

class Card extends Entity {
  protected $_accessible = [
    'id' => true,
    'user_id' => true,
    'card_name' => true,
    'created' => true,
    'updated' => true
  ];
}
?>