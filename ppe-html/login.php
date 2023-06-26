<?php
include("conecta.php");

$email = $_POST["email"];
$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];

$comando = $pdo->prepare("INSERT INTO usuarios(email,cpf,nome,senha) VALUES('$email','$cpf','$nome','$senha')");
$resultado=$comando->execute();

header("Location: tela_login.html");

?>
