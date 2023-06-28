<?php
    include("conecta.php");

    $nome_titular = $_POST["nome_titular"];
    $numero_cartao = $_POST["numero_cartao"];
    $cpf = $_POST["cpf"];
    $validade = $_POST["validade"];
    $cvv = $_POST["cvv"];

if(isset($_POST["inserir"]))
{ 
    $comando = $pdo->prepare("INSERT INTO pagamento(nomeportador,numerocartao,cpf,validade,cvv) VALUES('$nome_titular','$numero_cartao','$cpf','$validade',$cvv)");
    $resultado = $comando->execute();  
    header("Location: agradecimento.html");
}


?>
