<html>
<head>
  <?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
</head>

<?php
    echo $this->form->create(null,['type'=>'post','url'=>['controller'=>'Items','action'=>'add']]);
    echo $this->form->button('新しい商品を登録する',['class'=>'btn btn-default']);
    echo $this->form->end();
  ?>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>category</th>
      <th>name </th>
      <th>unit </th>
      <th>price </th>
      <th>description </th>
      <th>created </th>
      <th>modified </th>
    </tr>
  </thead>
<?php foreach($data->toArray() as $obj): ?>
  <tr>
    <td><?=h($obj->id) ?></td>
    <td><?=h($obj->category) ?></td>
    <td><?=h($obj->name) ?></td>
    <td><?=h($obj->unit) ?></td>
    <td><?=h($obj->price) ?></td>
    <td><?=h($obj->description) ?></td>
    <td><?=h($obj->created) ?></td>
    <td><?=h($obj->modified) ?></td>
    <td><a href="<?=$this->Url->build(['controller'=>'Items','action'=>'edit']); ?>
      ?id=<?=$obj->id ?>">
      編集</a></td>
    <td><a href="<?=$this->Url->build(['controller'=>'Items','action'=>'remove']); ?>
      ?id=<?=$obj->id ?>">削除</a></td>
  </tr>
<?php endforeach; ?>
</table>
