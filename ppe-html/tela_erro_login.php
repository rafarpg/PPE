<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
</head>
<link rel="stylesheet" type="text/css" href="../ppe.css/tela_login.css">
<style>
        .erro {
            color: red;
        }
</style>
<body>
    <div class="container">
        <form class="box" action="login_valida.php" method="post">
          <p id="enunciado">Entre com seu login e senha</p>
          <p id="erro" class="erro">Usuário ou senha incorretos.</p>
          <input type="text" id="nome" name="nome" placeholder="insira seu usuário" class="caixa" required>
          <input type="password" id="senha" name="senha" placeholder="sua senha" class="caixa" required>
          <input type="submit" class="botao" name="entrar" value="Entrar">
        </form>
    </div>
</body>
</html>