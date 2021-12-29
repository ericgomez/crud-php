<div>
  <form action="#" method="post">

    <label for="id" >ID:</label>
    <input type="text" id="id" name="id" placeholder="ID" value="<?php echo $employee->id; ?>" readonly/> 

    <label for="name" >Name:</label>
    <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $employee->name; ?>" /> 

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $employee->email; ?>"/>

    <input type="submit" value="Edit employee" />
  
  </form>
</div>