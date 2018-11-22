<html>
<head>
  <?php $this->Html->css('bootstrap/bootstrap.css');
  $this->Html->script('bootstrap/bootstrap.js');
  ?>
  <?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
</head>

<?php
echo $this->Form->create($entity,['type'=>'post','url'=>['controller'=>'Items','action'=>'update']]);
echo $this->Form->input('Items.name');
echo $this->Form->input('Items.unit');
echo $this->Form->input('Items.price');
echo $this->Form->input('Items.description');
echo $this->Form->submit('送信');
echo $this->Form->hidden('Items.id');
echo $this->Form->end();
?>
