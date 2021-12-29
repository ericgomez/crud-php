<?php

class Employee {

  public $id;
  public $name;
  public $email;

  public function __construct($id, $name, $email) {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
  }

  public static function consult() {
    $employeesList = [];

    $connection = DB::createInstance();

    $sql = "SELECT * FROM employees";
    $result = $connection->query($sql);
    // get array with all the rows
    $employees = $result->fetchAll();

    foreach( $employees as $employee ) {
      // save data in the array
      $employeesList[] = new Employee($employee['id'], $employee['name'], $employee['email']);
    }

    return $employeesList;
  }

  public static function add($name, $email) {

    $connection = DB::createInstance();

    $sql = "INSERT INTO employees (name, email) VALUES (?, ?)";
    $statement = $connection->prepare($sql);
    $statement->execute(array($name, $email));
  }

  public static function search($id) {
    $connection = DB::createInstance();

    $sql = "SELECT * FROM employees WHERE id = ?";
    $statement = $connection->prepare($sql);
    $statement->execute(array($id));

    $employee = $statement->fetch();

    return new Employee($employee['id'], $employee['name'], $employee['email']);
  }


  public static function edit($id, $name, $email) {
    $connection = DB::createInstance();

    $sql = "UPDATE employees SET name = ?, email = ? WHERE id = ?";
    $statement = $connection->prepare($sql);
    $statement->execute(array($name, $email, $id));
  }


  public static function delete($id) {
    $connection = DB::createInstance();
    $statement = $connection->prepare("DELETE FROM employees WHERE id = ?");
    $statement->execute(array($id));
  }

}

?>