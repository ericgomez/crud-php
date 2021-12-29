<?php

// values for default controller and action
$controller = "pages";
$action = "home";

if (isset($_GET['controller']) && isset($_GET['action'])) {

  // check if the controller and action exists
  if ($_GET['controller'] !== "" && $_GET['action'] !== "") {
    // change the values
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  }
  // print_r($_GET);

}

require_once("./views/template.php");

?>