<html>
<head>
<?php $this->Html->css('bootstrap/bootstrap.css');
$this->Html->script('bootstrap/bootstrap.js');

?>
</head>
<form>
<input type="button" value = "新しい商品を登録する" onclick="location.href='Items/add'">
</form>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name </th>
      <th>unit </th>
      <th>price </th>
      <th>description </th>
      <th>created </th>
      <th>updated </th>
    </tr>
  </thead>
<?php foreach($data->toArray() as $obj): ?>
  <tr>
    <td><?=h($obj->id) ?></td>
    <td><a href="<?=$this->Url->build(['controller'=>'Items','action'=>'edit']); ?>?id=<?=$obj->id ?>">
      <?=h($obj->name) ?></a></td>
    <td><?=h($obj->unit) ?></td>
    <td><?=h($obj->price) ?></td>
    <td><?=h($obj->description) ?></td>
    <td><?=h($obj->created) ?></td>
    <td><?=h($obj->updated) ?></td>
  </tr>
<?php endforeach; ?>
</table>
