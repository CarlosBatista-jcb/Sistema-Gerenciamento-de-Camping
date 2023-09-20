<?php
session_start();

// Verifique se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha as credenciais do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifique as credenciais no banco de dados
    // Consulta SQL para verificar as credenciais e obter o ID do administrador

    // Se as credenciais estiverem corretas, inicie a sessão
    if ($admin_id) {
        $_SESSION["admin_id"] = $admin_id;
        header("Location: admin.php"); // Redirecione para o painel administrativo
        exit();
    } else {
        // Credenciais incorretas, exiba uma mensagem de erro
        header("Location: login.php?error=1"); // Redirecione de volta para a página de login com uma mensagem de erro
        exit();
    }
}
?>
