<?php
include 'include/header.php';

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "camping";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $cpf = $_POST['cpf'];
    $vehicle_plate = $_POST['vehicle_plate'];
    $vehicle_year = $_POST['vehicle_year'];
    $phone = $_POST['phone'];
    $entry_time = $_POST['entry_time'];
    $entry_date = $_POST['entry_date'];
    $daily_use = $_POST['daily_use'];
    $motorhome_people = isset($_POST['motorhome_people']) ? $_POST['motorhome_people'] : 0;
    $motorhome_names = isset($_POST['motorhome_names']) ? $_POST['motorhome_names'] : "";

    // Inserir os dados do check-in no banco de dados
    $sql = "INSERT INTO checkin (first_name, last_name, cpf, vehicle_plate, vehicle_year, phone, entry_time, entry_date, daily_use, motorhome_people, motorhome_names)
            VALUES ('$first_name', '$last_name', '$cpf', '$vehicle_plate', '$vehicle_year', '$phone', '$entry_time', '$entry_date', '$daily_use', '$motorhome_people', '$motorhome_names')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a página de checkout com o ID do check-in
        $checkin_id = $conn->insert_id;
        header("Location: checkout.php?id=$checkin_id");
        exit;
    } else {
        echo "Erro ao inserir check-in no banco de dados: " . $conn->error;
    }

    $conn->close();
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
        <form action="checkin.php" method="POST">
            <!-- Seus campos de formulário aqui, mantendo os mesmos names e placeholders -->
            <!-- ... -->
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
