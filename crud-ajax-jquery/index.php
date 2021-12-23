<?php

$host="db";
$db="app_db";
$user="root";
$pass="root";


try {
  $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  // echo "Connected to $db at $host successfully.";

} catch(Exception $e) {
  echo $e->getMessage();
}

if ($_GET['action'] === 'add') {
  $name = $_POST['name'];
  $price = $_POST['price'];

  $sql = "INSERT INTO backpacks (name, price) VALUES (?, ?)";
  $statement = $connection->prepare($sql);
  $statement->execute([$name, $price]);

  // echo "Added $name with price $price.";
  exit();

}

// delete record of 
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $sql = "DELETE FROM backpacks WHERE id = ?";
  $statement = $connection->prepare($sql);
  $statement->execute([$id]);

  // echo "Deleted backpack with id $id.";
  exit();
}

$sql = "SELECT * FROM backpacks";
$statement = $connection->prepare($sql);
$statement->execute();

$backpacks = $statement->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($backpacks);

?>