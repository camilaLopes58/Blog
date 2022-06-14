<?php 

include "config/connection.php";

$stmt = $conectar->prepare("DELETE FROM posts WHERE id = :ID");
$id = $_GET['id'];
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Registro apagado";



 ?>