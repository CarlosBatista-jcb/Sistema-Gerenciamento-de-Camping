<?php include 'include/header.php'; 
// Função para gerar um ID único
function generateUniqueID() {
    return 'CHECKIN_' . time(); // Pode personalizar o formato conforme necessário
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gerar um ID único
    $checkin_id = generateUniqueID();

    // Resto do seu código de processamento do formulário aqui
    // ...
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
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

    <!-- Formulário de Check-In -->
    <div class="container mt-4">
        <h2>Check-In</h2>
        <form action="process_checkin.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="first_name">Primeiro Nome *</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="Primeiro Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">Sobrenome *</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Sobrenome">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cpf">CPF *</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF xxx.xxx.xxx-xx" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                </div>
                <div class="form-group col-md-6">
                    <label for="vehicle_plate">Placa do Veículo</label>
                    <input type="text" class="form-control" id="vehicle_plate" name="vehicle_plate" placeholder="Placa veiculo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="vehicle_year">Ano/Modelo do Veículo</label>
                    <input type="text" class="form-control" id="vehicle_year" placeholder="Ano/modelo do Veiculo" name="vehicle_year">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Telefone *</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="telefone xx xxxx-xxxx" required pattern="\\d{2}\ \d{5}-\d{4}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="entry_time">Horário de Entrada (HH:MM) *</label>
                    <input type="text" class="form-control" id="entry_time" name="entry_time" placeholder="Horário Entrada (hh:mm)" required pattern="\d{2}:\d{2}">
                </div>
                <div class="form-group col-md-4">
                    <label for="entry_date">Data de Entrada (DD/MM/AAAA) *</label>
                    <input type="text" class="form-control" id="entry_date" name="entry_date" placeholder="data entrada (dd/mm/aaa" required pattern="\d{2}/\d{2}/\d{4}">
                </div>
                <div class="form-group col-md-4">
                    <label for="daily_use">Tipo de Daily Use *</label>
                    <select class="form-control" id="daily_use" name="daily_use" placeholder="tipo de daily use" required>
                        <option value="Barraca">Barraca</option>
                        <option value="Motorhome">Motorhome</option>
                        <option value="Chalé">Chalé</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="motorhome_people">Quantidade de Pessoas no Motorhome</label>
                <input type="number" class="form-control" id="motorhome_people" placeholder="Quantidade pessoas motorhome" name="motorhome_people">
            </div>
            <div class="form-group">
                <label for="motorhome_names">Nomes das Pessoas no Motorhome (se aplicável)</label>
                <textarea class="form-control" id="motorhome_names" name="motorhome_names" placeholder="nome das pessoas no motorhome" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Check-In</button>
        </form>
    </div>

    <!-- ... Seu rodapé aqui ... -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'include/footer.php'; ?>
</body>
</html>
