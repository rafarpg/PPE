<?php 

if(isset($_POST['entrar'])) { 

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT nome, senha FROM usuarios WHERE nome = '$nome' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

    $nome = $sql_exec->fetch_assoc();
    if(password_verify($senha, $nome['senha'])){
    header("Location: testemenu.html");
	} else {
		echo "Nenhum usuário com esse login e senha foi encontrado!";
	}
}
?>