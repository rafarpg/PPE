<?php
include("conecta.php");

$user_id = $_SESSION['user_id'];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$num = $_POST["num"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

if(isset($_POST["inserir"]))
{ 
$comando = $pdo->prepare("INSERT INTO endereco(id_usuario_end,rua,cep,numero,complemento,bairro,cidade,estado) VALUES(NULL,'$rua','$cep',$num,'$complemento','$bairro','$cidade','$estado')");
$resultado=$comando->execute();
header("Location: testemenu.html");
}
?>