<?php

include_once('models/employee.php');
include_once("connection.php");


class EmployeesController {

    public function home() {

        $employees = Employee::consult();

        include_once("views/employees/home.php");
    }

    public function add() {
        if ($_POST) {
            // print_r($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];

            Employee::add($name, $email);
        }
        include_once("views/employees/add.php");
    }

    public function edit() {

        $id = $_GET['id'];

        $employee = Employee::search($id);

        if ($_POST) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            Employee::edit($id, $name, $email);
        }

        include_once("views/employees/edit.php");
    }

    public function delete() {
        print_r($_GET);
        $id = $_GET['id'];

        Employee::delete($id);

        // header("Location: ./?controller=employees&action=home");

    }

}

?>