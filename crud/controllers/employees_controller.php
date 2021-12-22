<?php 

include_once("connection.php");

DB::createInstance();

class EmployeesController {
  public function initiation() {
    include_once("views/employees/initiation.php");
  }

  public function create() {
    if (isset($POST['submit'])) {
      # code...
    }
    include_once("views/employees/create.php");
  } 

  public function update() {
    include_once("views/employees/update.php");
  }
}

?>