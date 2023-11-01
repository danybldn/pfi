<?php
session_start();

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login ou outra página desejada
header("Location: index.php"); // Substitua "index.php" pelo URL da página desejada
exit();
?>
