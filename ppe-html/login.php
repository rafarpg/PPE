<?php
    include("conecta.php");
    

    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    

if(isset($_POST["inserir"]))
{ 
    $mysqli->query("INSERT INTO usuarios(email,cpf,nome,senha) VALUES('$email','$cpf','$nome','$senha')");
    $resultado = $comando->execute();  
    header("Location: tela_login.html");
}


?>