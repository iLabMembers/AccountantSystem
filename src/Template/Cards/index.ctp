<p>This is Orders table records.</p>
<table>
<thead>
  <tr>
    <th>id</th>
    <th>user_id</th>
    <th>card_name</th>
    <th>created</th>
    <th>updated</th>
  </th>
<thead>
<?php foreach($data->toArray() as $obj): ?>
<tr>
    <td><?=h($obj->id) ?></td>
    <td><?=h($obj->user_id) ?></td>
    <td><?=h($obj->card_name) ?></td>
    <td><?=h($obj->created) ?></td>
    <td><?=h($obj->updated) ?></td>
</tr>
<?php endforeach; ?>
</table>