<?php
require 'app/db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM cliente WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: /cadastroclientes/clientes.php");
}