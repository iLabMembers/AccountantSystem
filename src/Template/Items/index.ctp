<html>
<form>
<input type="button" value = "新しい商品を登録する" onclick="location.href='Items/add'">
</form>
<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
<table class="table>
<?php foreach($data->toArray() as $obj): ?>
  <tr>
    <td><?=h($obj->id) ?></td>
    <td><?=h($obj->name) ?></a></td>
    <td><?=h($obj->unit) ?></td>
    <td><?=h($obj->price) ?></td>
    <td><?=h($obj->description) ?></td>
    <td><?=h($obj->created) ?></td>
    <td><?=h($obj->modified) ?></td>
    <td><a href="<?=$this->Url->build(['controller'=>'Items','action'=>'edit']); ?>
      ?id=<?=$obj->id ?>">
      編集</td>
    <td><a href="<?=$this->Url->build(['controller'=>'Items','action'=>'remove']); ?>
      ?id=<?=$obj->id ?>">削除</td>
  </tr>
<?php endforeach; ?>
</table>
