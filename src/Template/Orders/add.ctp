<?=$this->Form->create($entity,
  ['type'=>'post',
  'url'=>['controller'=>'Orders',
  'action' => 'create']]) ?>

<div>id</div>
<div><?=$this->Form->text('Orders.id') ?></div>
<div><?=$this->Form->submit('決定') ?></div>
<?=$this->Form->end() ?>