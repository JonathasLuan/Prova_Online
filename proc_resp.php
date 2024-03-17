<?php
session_start();
$usuario_id = $_SESSION['id'];

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Array para armazenar todas as respostas
    $respostas = array();

    // Itera sobre os dados do formulário para resgatar as respostas de cada questão
    foreach ($_POST as $key => $value) {
        // Verifica se o campo começa com 'resposta_'
        if (strpos($key, 'resposta_') === 0) {
            // Extrai o ID da questão do nome do campo
            $questao_id = substr($key, strlen('resposta_'));

            // Armazena o ID da questão e a resposta selecionada
            $respostas[$questao_id] = $value;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados (assumindo que você já tenha uma conexão estabelecida)

    // Itera sobre as respostas para inseri-las no banco de dados
    foreach ($respostas as $questao_id => $resposta) {
        // Constrói e executa a consulta SQL de inserção
        $sql = "INSERT INTO resposta (questao_id, alternativa_selecionada_id, usuario_id) 
                VALUES ($questao_id, $resposta, $usuario_id)";
    }

    // Fecha a conexão com o banco de dados
    $mysqli->close();
}


/*
    $resposta_questao_1 = $_POST['resposta_1']; // Resposta para a primeira questão
    $resposta_questao_2 = $_POST['resposta_2']; // Resposta para a segunda questão
    $resposta_questao_3 = $_POST['resposta_3']; // Resposta para a segunda questão
*/