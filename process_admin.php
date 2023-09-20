<?php
// Configurações do banco de dados
$hostname = "localhost";  // Hostname (geralmente é 'localhost')
$username = "root";       // Nome de usuário do MySQL (geralmente é 'root')
$password = "";           // Senha do MySQL (deixe em branco se não tiver senha)
$database = "camping";    // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Define o conjunto de caracteres para UTF-8 (opcional)
$conn->set_charset("utf8");
?>
<?php
// Inclua a configuração da conexão com o banco de dados aqui

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Criptografe a senha (use o método de criptografia adequado)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Inserir os dados na tabela 'administradores'
    $sql = "INSERT INTO administradores (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        // Redirecione para a página de admin com uma mensagem de sucesso
        header("Location: admin.php?success=1");
        exit();
    } else {
        // Se a inserção falhar, redirecione com uma mensagem de erro
        header("Location: admin.php?error=1");
        exit();
    }

    // Feche a conexão com o banco de dados
    $stmt->close();
    $conn->close();
} else {
    // Se alguém tentar acessar este arquivo diretamente, redirecione
    header("Location: admin.php");
    exit();
}
?>
