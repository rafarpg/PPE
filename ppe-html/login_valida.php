<?php

if (isset($_POST["senha"])) {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    include("conecta.php");
    $comando = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome AND senha = :senha");
    $comando->bindParam(":nome", $nome);
    $comando->bindParam(":senha", $senha);
    $comando->execute();
    $n = $comando->rowCount();
    if ($n > 0) {
        // Autenticação bem-sucedida
        header("Location: testemenu.html"); // Redireciona para a página de sucesso
        exit(); // Termina a execução do script para evitar que o restante do código seja executado
    } else {
        // Usuário ou senha incorretos
        $erro = "Usuário ou senha incorretos.";
        header("Location: tela_erro_login.php");
    }
}
?>