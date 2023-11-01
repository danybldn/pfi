<?php

include 'conexao.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email']; // Pega o email da variável de sessão
}


// Consulta SQL para obter o nome do usuário
$sql = "SELECT nome_completo FROM cadastro_usuarios WHERE id = 25";

$result = $conn->query($sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $nomeUsuario = $row['nome_completo'];
} else {
    $nomeUsuario = "Usuário não encontrado";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
