<div class="card">
  <div class="card-header">
    Edit Employee
  </div>
  <div class="card-body">
    <form action="" method="post">
    <div class="mb-2">
        <label for="inputName">ID:</label>
        <input type="text" class="form-control" name="id" value="<?php echo $employee->id; ?>" aria-describedby="idHelp" placeholder="ID" disabled>
      </div>

      <div class="mb-2">
        <label for="inputName">Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $employee->name; ?>"  aria-describedby="nameHelp" placeholder="Enter name">
      </div>

      <div class="mb-2">
        <label for="inputEmail1">Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $employee->email; ?>"  aria-describedby="emailHelp" placeholder="Enter email">
      </div>
    
      <button type="submit" class="btn btn-success">Update employee</button>
    </form>
  </div>
</div>