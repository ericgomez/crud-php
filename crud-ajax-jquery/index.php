<?php

$host="db";
$db="app_db";
$user="root";
$pass="root";


try {
  $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  echo "Connected to $db at $host successfully.";

} catch(Exception $e) {
  echo $e->getMessage();
}

?>