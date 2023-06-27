<?php
    include("conecta.php");     
    $email = $_POST["email"];
    $nome = $_POST["nome"];

    // Consulta para verificar se as informações estão corretas
    $comando = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $comando->bindParam(":email", $email);
    $comando->execute();
    $n = $comando->rowCount();
    if ($n > 0) {
        // As informações estão corretas, então atualiza os dados do usuário
        $comando = $pdo->prepare("UPDATE usuarios SET nome = '$nome' WHERE email = '$email'");
        $comando->execute();
        header("Location: testemenu.html");
    }
?>