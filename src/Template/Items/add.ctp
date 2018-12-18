<html>
<head>
<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
</head>

<?php
echo $this->Form->create($entity,['type'=>'post','enctype'=>'multipart/form-data','url'=>['controller'=>'Items','action'=>'create']]);
echo $this->Form->input('Items.name');
echo $this->Form->input('Items.category');
echo $this->Form->input('Items.unit');
echo $this->Form->input('Items.price');
echo $this->Form->input('Items.description');
echo $this->Form->input('file_name',['type'=>'file','label'=>'画像ファイル','name'=>'image.jpeg']);
echo $this->Form->submit('送信');
echo $this->Form->end();

?>
<?php
  echo $this->Form->create('Uploads',['type'=>'post','url'=>['controller'=>'Items','action'=>'createFromCsv'],'class'=>'button','enctype'=>"multipart/form-data"]);
  echo $this->Form->input('CSV',['type'=>'file','label'=>'csvファイル','name'=>'data.csv']);
  echo $this->Form->button('csvファイルを読み込み');
  echo $this->Form->end();
  ?>
