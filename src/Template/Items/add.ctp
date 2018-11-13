<html>
<head>
<?php $this->Html->css('bootstrap/bootstrap.css');
$this->Html->script('bootstrap/bootstrap.js');
?>
</head>

<?php
echo $this->Form->create($entity,['type'=>'post','url'=>['controller'=>'Items','action'=>'create']]);
echo $this->Form->input('Items.id');
echo $this->Form->input('Items.name');
echo $this->Form->input('Items.unit');
echo $this->Form->input('Items.price');
echo $this->Form->input('Items.description');
echo $this->Form->input('Items.created');
echo $this->Form->input('Items.updated');
echo $this->Form->submit('送信');
echo $this->Form->end();
?>
<?php
  echo $this->Form->create(ItemsTable,['type'=>'file','url'=>['controller'=>'Items','action'=>'create']]);
  echo $this->Form->input('fileupload',['type'=>'file','label'=>'csvファイル']);
  echo $this->Form->submit('csvファイルを読み込み');
  echo $this->Form->end();
  ?>
