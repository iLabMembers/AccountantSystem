<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrdersTable extends Table {

  public function initialize(array $config) {
    parent::initialize($config);
    $this->setTable('orders');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');
  }

  public function validationDefault(Validator $validator) {
    $validator
        ->integer('id')
        ->requirePresence('id','create')
        ->notEmpty('id','create');
    $validator
        ->add('id', 'custom',[
          'rule' =>[$this, 'id_check'],
          'message' => 'invalid id'
        ]);

    return $validator;
  }
  public function id_check($value, $context){
    return (bool) preg_match('[0-9]{4}', $value);
  }
}
?>