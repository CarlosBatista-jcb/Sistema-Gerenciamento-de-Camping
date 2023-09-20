<?php include 'include/header.php'; 
// Consulta todos os check-ins no banco de dados
// Substitua isso pela lógica de consulta real no seu banco de dados
$checkins = []; // Array para armazenar os resultados da consulta

// Conecte-se ao banco de dados e faça a consulta
// Substitua as configurações de conexão e a consulta SQL com suas informações reais
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "camping";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM checkin"; // Substitua "checkin" pelo nome da sua tabela

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $checkins[] = $row;
    }
}

$conn->close();

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
    <title>Checkout</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
    <h2>Checkout</h2>
        <form action="process_checkout.php" method="post">
            <!-- Consulta ao banco de dados para obter informações do checkin -->
            <input type="text" name="cliente_id" placeholder="ID do cliente" required>
            <input type="submit" value="Consultar Check-In">
        </form>

        <!-- Informações do Check-In -->
        <div id="info-checkin">
            <!-- Exibir informações obtidas do banco de dados aqui -->
        </div>

        <!-- Exibir a lista de check-ins em uma tabela -->
    <div class="container mt-4">
        <h2>Lista de Check-Ins</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Primeiro Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($checkins as $checkin) : ?>
                    <tr>
                        <td><?= $checkin['id']; ?></td>
                        <td><?= $checkin['first_name']; ?></td>
                        <td><?= $checkin['last_name']; ?></td>
                        <td><?= $checkin['cpf']; ?></td>
                        <!-- Adicione outras colunas conforme necessário -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

        <!-- Formulário de pagamento -->
        <form action="process_checkout.php" method="post">
            <h3>Forma de Pagamento</h3>
            <select name="forma_pagamento" required>
                <option value="credito">Cartão de Crédito</option>
                <option value="debito">Cartão de Débito</option>
                <option value="pix">Pix</option>
            </select>

            </div>
            <div class="form-group">
                <label for="card_number">Número do Cartão</label>
                <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Número do Cartão">
            </div>
            <div class="form-group">
                <label for="security_code">Código de Segurança do Cartão</label>
                <input type="text" class="form-control" id="security_code" name="security_code" placeholder="Código de Segurança do Cartão">
            </div>
            <div class="form-group">
                <label for="installments">Parcelas (mínimo 1, máximo 5)</label>
                <input type="number" class="form-control" id="installments" name="installments" min="1" max="5" placeholder="Parcelas">
            </div>
            <button type="submit" class="btn btn-primary">Finalizar Check-Out</button>
        </form>
    </div>
            

            <!-- Botão de Pagar -->
            <input type="submit" value="Pagar">
        </form>
    </div>
    
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'include/footer.php'; ?>
</body>
</html>
