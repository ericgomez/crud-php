<?php 
include_once('models/employee.php');
include_once("connection.php");

class EmployeesController {
  public function initiation() {

    $employees = Employee::read();

    include_once("views/employees/initiation.php");
  }

  public function create() {
    if ($_POST) {
      // print_r($_POST);
      
      $name = $_POST['name'];
      $email = $_POST['email'];

      //execute function create from class Employee
      Employee::create($name, $email);
    }
    include_once("views/employees/create.php");
  } 

  public function update() {
    include_once("views/employees/update.php");
  }
}

?>