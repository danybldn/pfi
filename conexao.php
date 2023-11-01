<?php
$banco = "pfi";
$usuario = "root";
$senha = "2105D&P";
$hostname = "localhost";

$conn = new mysqli ($hostname,$usuario,$senha, $banco);
if ($conn->connect_error) {
    die ("Não foi possível conectar ao banco MySQL. " . $conn->connect_error);

// Fechar a conexão com o banco de dados
$conn->close();
}?>