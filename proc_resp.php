<?php
include("conexao.php");

$sql = "SELECT * FROM respostas";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resposta_questao_1 = $_POST['resposta_1']; // Resposta para a primeira questão
    $resposta_questao_2 = $_POST['resposta_2']; // Resposta para a segunda questão
    $resposta_questao_3 = $_POST['resposta_3']; // Resposta para a segunda questão
}
echo $resposta_questao_1;
