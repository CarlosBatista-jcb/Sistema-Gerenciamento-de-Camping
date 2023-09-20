<?php
// Iniciar ou retomar a sessão
session_start();

// Destruir a sessão atual
session_destroy();

// Redirecionar para a página de login após o logout
header("Location: login.php");
exit();
?>
