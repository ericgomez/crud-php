<div class="card">
  <div class="card-header">
    Edit Employee
  </div>
  <div class="card-body">
    <form action="" method="post">
    <div class="mb-2">
        <label for="id">ID:</label>
        <input type="text" class="form-control" id="id" name="id" value="<?php echo $employee->id; ?>" aria-describedby="idHelp" placeholder="ID" readonly>
      </div>

      <div class="mb-2">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $employee->name; ?>" aria-describedby="nameHelp" placeholder="Enter name">
      </div>

      <div class="mb-2">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $employee->email; ?>" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
    
      <button type="submit" class="btn btn-success">Update employee</button>
    </form>
  </div>
</div>