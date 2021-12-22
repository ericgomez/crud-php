<?php

// echo $controller;
// echo $action;

include_once("controllers/".$controller."_controller.php");

$objectController = ucfirst($controller)."Controller";

$controller = new $objectController();
$controller->$action();

?>