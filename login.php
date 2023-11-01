<?php

include "conexao.php";

// Iniciar a sessão (se já não estiver iniciada)
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

    $sql = "SELECT * FROM cadastro_usuarios WHERE email = '$email' AND senha = '$senha' ;";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows==1) {
        $_SESSION['logado'] = true;
        header('Location: chat.php');
        exit();
        
    } else {
        echo "<script> alert ('É necessário realizar o cadastro antes'); " ; 
        echo "javascript:window.location='login.html';</script>";
            }

?>