<?php

$host = 'localhost';
$dbname = 'ppe';
$nome = 'nome';
$senha = 'senha';

// Conecta ao banco de dados
try {
    $conn = new PDO("mysql:dbname=ppe;host=localhost;charset=utf8","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro na conexão com o banco de dados: ' . $e->getMessage());
}
?>