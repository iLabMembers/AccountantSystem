<p>This is People table records.</p>
<!-- <pre>
  <!-- <?php print_r($data);?> -->
<!-- </pre> -->
<table>
  <thead><tr>
    <th>id</th><th>name</th><th>mail</th><th>age</th>
  </tr></thead>
  <?php foreach ($data->toArray() as $obj): ?>
    <tr>
      <td><?=h($obj->id) ?></td>
      <td><?=h($obj->first_name)?></td>
      <td><?=h($obj->last_name)?></td>
      <td><?=h($obj->role)?></td>
      <td><?=h($obj->password)?></td>
      <td><?=h($obj->created)?></td>
      <td><?=h($obj->updated)?></td>
</tr>
<?php endforeach; ?>
</table>
