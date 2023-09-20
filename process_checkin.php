<?php
// Inclua a configuração da conexão com o banco de dados aqui
// Substitua 'seu_host', 'seu_usuario', 'sua_senha' e 'seu_banco' pelas informações corretas
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'camping';

// Crie uma conexão com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtenha os dados do formulário
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$cpf = $_POST['cpf'];
$vehicle_plate = $_POST['vehicle_plate'];
$vehicle_year = $_POST['vehicle_year'];
$phone = $_POST['phone'];
$entry_time = $_POST['entry_time'];
$entry_date = $_POST['entry_date'];
$daily_use = $_POST['daily_use'];
$motorhome_people = $_POST['motorhome_people'];
$motorhome_names = $_POST['motorhome_names'];

// Query SQL para inserir os dados no banco de dados
$sql = "INSERT INTO checkin (first_name, last_name, cpf, vehicle_plate, vehicle_year, phone, entry_time, entry_date, daily_use, motorhome_people, motorhome_names)
        VALUES ('$first_name', '$last_name', '$cpf', '$vehicle_plate', '$vehicle_year', '$phone', '$entry_time', '$entry_date', '$daily_use', '$motorhome_people', '$motorhome_names')";

if ($conn->query($sql) === TRUE) {
    echo "Check-In realizado com sucesso!";
} else {
    echo "Erro ao realizar o Check-In: " . $conn->error;
}
// Após inserir os dados com sucesso
if ($conn->query($sql) === TRUE) {
    // Redirecionar de volta à página de check-in
    header("Location: checkin.php");
    exit(); // Certifique-se de encerrar o script após o redirecionamento
} else {
    echo "Erro ao realizar o Check-In: " . $conn->error;
}

// Feche a conexão com o banco de dados
$conn->close();
?>
