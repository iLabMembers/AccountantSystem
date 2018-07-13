<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Reward extends Entity{
  public $belongsTo = array('User');
  protected $_accessible = [
    'id' => true,
    'user_id' => true,
    'title' => true,
    'price' => true,
    'created' => true,
    'updated' => true
  ];


}
?>
