<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<p> This is Items table records. </p>
<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>unit</th>
      <th>price</th>
      <th>dexcription</th>
      <th>created</th>
      <th>updated</th>
    </tr>
  </thead>
  <?php foreach($data->toArray() as $obj): ?>
    <tr>
      <td><?=h($obj->id) ?></td>
      <td><?=h($obj->name) ?></td>
      <td><?=h($obj->unit) ?></td>
      <td><?=h($obj->price) ?></td>
      <td><?=h($obj->description) ?></td>
      <td><?=h($obj->created) ?></td>
      <td><?=h($obj->updated) ?></td>
    </tr>
  <?php endforeach; ?>
</table>
