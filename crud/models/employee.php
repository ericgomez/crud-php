<?php


class Employee {
  public static function create($name, $email) {
    $connectionDB = DB::createInstance();

    $sql = $connectionDB->prepare("INSERT INTO employee (name, email) VALUES (?, ?)");
    $sql->execute(array($name, $email));
  }
}


?>