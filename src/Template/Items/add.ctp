<html>
<head>
<?php $this->Html->css('bootstrap/bootstrap.css');
$this->Html->script('bootstrap/bootstrap.js');
?>
<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
</head>

<?php
echo $this->Form->create($entity,['type'=>'post','url'=>['controller'=>'Items','action'=>'create']]);

echo $this->Form->input('Items.name');
echo $this->Form->input('Items.unit');
echo $this->Form->input('Items.price');
echo $this->Form->input('Items.description');
echo $this->Form->submit('送信');
echo $this->Form->end();
?>
<?php
  echo $this->Form->create('Uploads',['type'=>'file','url'=>['controller'=>'Items','action'=>'create','class'=>'button'],'enctype'=>"multipart/form-data"]);
  echo $this->Form->input('CSV',['type'=>'file','label'=>'csvファイル','name'=>'data.csv']);
  echo $this->Form->button('csvファイルを読み込み');
  echo $this->Form->end();
  ?>
