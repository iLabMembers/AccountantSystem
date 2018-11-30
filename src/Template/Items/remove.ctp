<head>
  <?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
</head>
<p>下記のレコードを削除しますか？</p>
<div>id: <?=$entity['id'] ?></div>
<div>name: <?=$entity['name'] ?></div>
<div>unit: <?=$entity['unit'] ?></div>
<div>price: <?=$entity['price'] ?></div>
<div>description: <?=$entity['description'] ?></div>
<div>created: <?=$entity['created'] ?></div>
<div>modified: <?=$entity['modified'] ?></div>
<hr>
<?=$this->Form->create($entity,['type'=>'post','url'=>['controller'=>'Items','action'=>'destroy']]) ?>
<?=$this->Form->hidden('Items.id') ?>
<div><?=$this->Form->submit('削除する') ?></div>
<?=$this->Form->end() ?>
