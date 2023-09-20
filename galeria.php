<?php include 'include/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria do Camping</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Camping Aliança</a>
            <div>
                <?php
                if (isset($_SESSION['admin_id'])) {
                    echo '<a href="logout.php" class="btn btn-danger login-button">Sair</a>';
                } else {
                    echo '<a href="login.php" class="btn btn-primary login-button">Entrar</a>';
                }
                ?>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da Galeria -->
    <div class="container mt-4">
        <h2>Galeria de Imagens</h2>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/campsite1.jpg" class="card-img-top" alt="Imagem 1">
                    <div class="card-body">
                        <p class="card-text">Camping Aliança!</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/campsite2.jpg" class="card-img-top" alt="Imagem 2">
                    <div class="card-body">
                        <p class="card-text">Camping Aliança!</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/campsite3.jpg" class="card-img-top" alt="Imagem 3">
                    <div class="card-body">
                        <p class="card-text">Camping Aliança!</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/campsite4.jpg" class="card-img-top" alt="Imagem 4">
                    <div class="card-body">
                        <p class="card-text">Camping Aliança!</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/campsite5.jpg" class="card-img-top" alt="Imagem 5">
                    <div class="card-body">
                        <p class="card-text">Camping Aliança!</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/campsite6.jpg" class="card-img-top" alt="Imagem 6">
                    <div class="card-body">
                        <p class="card-text">Camping Aliança!</p>
                    </div>
                </div>
            </div>
            
            <!-- Adicione mais colunas e cartões conforme necessário para suas imagens -->
        </div>
    </div>

    <!-- ... Seu rodapé aqui ... -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'include/footer.php'; ?>
</body>
</html>
