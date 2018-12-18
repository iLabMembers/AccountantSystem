<html>
<head>
  <?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
</head>

<?php
echo $this->Form->create($entity,['type'=>'post','enctype'=>'multipart/form-data','class'=>'button','url'=>['controller'=>'Items','action'=>'update']]);
echo $this->Form->input('Items.name');
echo $this->Form->input('Items.category');
echo $this->Form->input('Items.unit');
echo $this->Form->input('Items.price');
echo $this->Form->input('Items.description');
echo $this->Form->input('file_name',['type'=>'file','label'=>'画像ファイル','name'=>'image.jpeg']);
echo $this->Form->submit('送信');
echo $this->Form->hidden('Items.id');
echo $this->Form->end();
?>
