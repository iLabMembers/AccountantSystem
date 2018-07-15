<p>This is Rewards table records.</p>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>user_id</th>
      <th>title</th>
      <th>price</th>
      <th>created</th>
      <th>updated</th>
    </tr>
  </thead>
  <?php foreach ($data->toArray() as $obj): ?>
    <tr>
      <td><?=h($obj->id) ?></td>
      <td><?=h($obj->user_id)?></td>
      <td><?=h($obj->title)?></td>
      <td><?=h($obj->price)?></td>
      <td><?=h($obj->created)?></td>
      <td><?=h($obj->updated)?></td>
    </tr>
  <?php endforeach; ?>
</table>
