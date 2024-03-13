<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $senha = $_POST["senha"];
} else {
    echo "Digite Nome e Senha para se cadastrar";
}
$sql = "INSERT INTO usuario (nome, senha) VALUES ('$nome', '$senha')";
