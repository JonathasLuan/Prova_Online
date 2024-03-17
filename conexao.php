<?php
// Conexão com o banco de dados (substitua as informações conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prova_online";

// Criar conexão
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Configurar a codificação de caracteres para UTF-8
mysqli_set_charset($mysqli, "utf8mb4");
