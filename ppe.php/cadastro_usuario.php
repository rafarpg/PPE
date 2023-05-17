<?php
    include("conecta_usuario.php");

    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

if(isset($_POST["inserir"]))
{ 
    $comando = $pdo->prepare("INSERT INTO usuarios(email,cpf,nome,senha) VALUES('$email','$cpf','$nome','$senha')");
    $resultado = $comando->execute();  
    header("Location: ../ppe.html/tela_login.html");
}


?>
