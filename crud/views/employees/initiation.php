<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($employees as $employee) { ?> 

    <tr>
      <th scope="row"><?php echo $employee->id; ?></th>
      <td><?php echo $employee->name; ?></td>
      <td><?php echo $employee->email; ?></td>
      <td>
        <div class="btn-group" role="group">
          <a href="#" class="btn btn-info">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </div>
      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>