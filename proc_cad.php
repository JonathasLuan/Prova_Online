<?php
/*
include("conexao.php");

// Consulta SQL
$sql = "SELECT * FROM User";

$result = $conn->query($sql);
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
}
echo $nome, $email;