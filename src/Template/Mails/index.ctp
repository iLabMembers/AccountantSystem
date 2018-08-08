<p> This is Mails table records. </p>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>subject</th>
      <th>body</th>
      <th>created</th>
      <th>updated</th>
    </tr>
  </thead>
  <?php foreach($data->toArray() as $obj): ?>
    <tr>
      <td><?=h($obj->id) ?></td>
      <td><?=h($obj->subject) ?></td>
      <td><?=h($obj->body) ?></td>
      <td><?=h($obj->created) ?></td>
      <td><?=h($obj->updated) ?></td>
    </tr>
  <?php endforeach; ?>
</table>