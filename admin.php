
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema gerenciamento Camping Aliança </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
    
</head>
<body>
    <!-- Seu cabeçalho aqui --> 
    <?php include 'include/header.php'; ?>  

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="container">
    <h2>Painel Administrador</h2>
    
    <!-- Adicione aqui o formulário para adicionar administradores -->
    <form method="post" action="process_admin.php">
        <div class="form-group">
            <label for="username">Nome de Usuário:</label>
            <input type="text" class="form-control" id="username" name="username" required placeholder="Nome de Usuário">
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Administrador</button>
    </form>
</div>
   

    
    <!-- Seu rodapé aqui -->            
    <?php include 'include/footer.php'; ?>

</body>
</html>
