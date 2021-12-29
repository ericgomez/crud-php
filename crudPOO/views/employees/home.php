<a href="?controller=employees&action=add">Add employee</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  <?php foreach ( $employees as $employee ) { ?>
  <tr>
    <td><?php echo $employee->id; ?></td>
    <td><?php echo $employee->name; ?></td>
    <td><?php echo $employee->email; ?></td>
    <td>
      <a href="?controller=employees&action=edit&id=<?php echo $employee->id; ?>">Edit</a>
      <a href="?controller=employees&action=delete&id=<?php echo $employee->id; ?>">Delete</a>
    </td>
  </tr>
  <?php } ?>

</table>