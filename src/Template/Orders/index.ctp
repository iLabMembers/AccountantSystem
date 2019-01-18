<p>This is Orders table records.</p>

<table>
<thead><tr>
  <th>id</th><th>user_id</th>
  <th>item_id</th>
  <th>num</th>
  <th>total</th>
  <th>created</th>
  <th>updated</th>
</th><thead>
<?php foreach($data as $obj): ?>
<tr>
    <td><?=h($obj->id) ?></td>
    <td><?=h($obj->user_id) ?></td>
    <td><?=h($obj->item_id) ?></td>
    <td><?=h($obj->num) ?></td>
    <td><?=h($obj->total) ?></td>
    <td><?=h($obj->created) ?></td>
    <td><?=h($obj->updated) ?></td>
</tr>
<?php endforeach; ?>
</table>