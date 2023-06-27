<?php
include("conecta.php");  
if (isset($_POST["senha"])) {
       
    $email = $_POST["email"];
    $novasenha = $_POST["nova-senha"];
    $senha = $_POST["senha"];

    // Consulta para verificar se as informações estão corretas
    $comando = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
    $comando->bindParam(":email", $email);
    $comando->bindParam(":senha", $senha);
    $comando->execute();
    $n = $comando->rowCount();
    if ($n > 0) {
        // As informações estão corretas, então atualiza os dados do usuário
        $comando = $pdo->prepare("UPDATE usuarios SET senha = :novasenha WHERE usuarios.email = :email");
        $comando->bindParam(":novasenha", $novasenha); 
        $comando->execute();
        header("Location: testemenu.html");
    } else {
        header("Location: testemenu.html");
    }
} 
else {
    header("Location: testemenu.html");
}
?>