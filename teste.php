<?php
// Arquivo de teste para conexão e consulta ao banco de dados

// Configurações do banco de dados (substitua com suas próprias credenciais)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "cadastro";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!<br>";

// Consulta simples para selecionar todos os registros da tabela de usuários
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados de cada usuário encontrado
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - E-mail: " . $row["email"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado na tabela 'usuarios'.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
