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

  public static function read() {
    $listEmployees = [];
    $connectionDB = DB::createInstance();

    $sql = "SELECT * FROM employee";
    $result = $connectionDB->query($sql);

    foreach($result->fetchAll() as $employee) {
      $listEmployees[] = new Employee($employee['id'], $employee['name'], $employee['email']);
    }

    return $listEmployees;
  }

  public static function create($name, $email) {
    $connectionDB = DB::createInstance();

    $sql = $connectionDB->prepare("INSERT INTO employee (name, email) VALUES (?, ?)");
    $sql->execute(array($name, $email));
  }

  public static function delete($id) {
    $connectionDB = DB::createInstance();

    $sql = $connectionDB->prepare("DELETE FROM employee WHERE id = ?");
    $sql->execute(array($id));
  }
}


?>