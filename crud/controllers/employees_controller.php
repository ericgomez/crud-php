<?php 

class EmployeesController {
  public function initiation() {
    include_once("views/employees/initiation.php");
  }

  public function create() {
    include_once("views/employees/create.php");
  } 

  public function update() {
    include_once("views/employees/update.php");
  }
}

?>