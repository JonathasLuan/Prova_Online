<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["email"];
    $senha = $_POST["senha"];
} else {
    echo "Digite Nome e Senha para se cadastrar";
}

$result_usuario = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$_SESSION['id_usuario'] = mysqli_insert_id($conn);

if (mysqli_insert_id($conn)) {
    header("Location: prova.php");
} else {
    header("Location: cadastro.php");
    echo "Falha ao cadastrar.";
}
