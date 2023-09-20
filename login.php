<?php
// Inclua o arquivo header.php para ter o cabeçalho da página
include 'include/header.php';
?>

<div class="container">
    <h2>Login</h2>
    
    <?php
    // Verifique se há mensagens de erro (por exemplo, credenciais incorretas)
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<div class="alert alert-danger">Credenciais incorretas. Tente novamente.</div>';
    }
    ?>
    
    <form method="post" action="process_login.php">
        <div class="form-group">
            <label for="username">Nome de Usuário:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

<?php
// Inclua o arquivo footer.php para ter o rodapé da página
include 'include/footer.php';
?>
