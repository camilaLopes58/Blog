<?php 

include "config/connection.php";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//preparar

$stmt = $conectar->prepare("INSERT INTO users(nome, login, senha) VALUES(:nome, :login, :senha)");


//tratar
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);



header("Location:cad_user.php");


 ?>