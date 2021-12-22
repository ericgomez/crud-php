<?php

$controller = "pages";
$action = "initiation";

if(isset($_GET['controller']) && isset($_GET['action'])){

  if($GET['controller'] !== "" && $GET['action'] !== "") {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  };

  // print_r($controller);
  // print_r($action);

}

require_once("views/template.php");

?>