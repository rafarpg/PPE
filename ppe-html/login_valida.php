<?php 
include("conecta2.php");





// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém as credenciais do formulário
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Consulta o banco de dados para verificar as credenciais
    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE nome = :nome');
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();
    $user = $stmt->fetch();

    // Verifica se o usuário existe e se a senha está correta
    if ($user && password_verify($senha, $user['senha'])) {
        // Autenticação bem-sucedida, redireciona para a página de sucesso
        header('Location: testemenu.html');
        exit;
    } else {
        // Autenticação falhou, exibe uma mensagem de erro
        echo 'Usuário ou senha inválidos.';
    }
}
?>
?>