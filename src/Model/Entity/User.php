<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class User extends Entity{
  protected $_accessible = [
    'id' => true,
    'first_name' => true,
    'last_name' => true,
    'role' => true,
    'password'=> true,
    'created' => true,
    'updated' => true
  ];

  
}
?>
