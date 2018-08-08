<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
class Mail extends Entity
{
  protected $_accessible =
  [
    'id' => true,
    'subject' => true,
    'body' => true,
    'created' => true,
    'updated' => true
  ];
}
?>