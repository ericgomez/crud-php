<?php 

// the data is received from the url
// echo $controller;
// echo $action;

include_once("controllers/".$controller."_controller.php");

$objController = ucfirst($controller)."Controller";

$controller = new $objController();
$controller->$action();

?>