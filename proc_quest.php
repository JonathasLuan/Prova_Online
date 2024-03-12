<?php
include("conexao.php");

// Consulta SQL para buscar todas as questões e suas alternativas
$sql = "SELECT q.questao_id, q.texto_questao, q.enunciado, a.alternativa_id, a.texto_alternativa, a.letra_alternativa
        FROM Questoes q
        INNER JOIN Alternativas a ON q.questao_id = a.questao_id
        ORDER BY q.questao_id, a.letra_alternativa";

$result = $conn->query($sql);

// Array para armazenar as questões e suas alternativas
$questoes = array();

// Loop para processar o resultado da consulta
if ($result->num_rows > 0) {
    $current_question_id = null;
    $current_question = null;

    while ($row = $result->fetch_assoc()) {
        // Se for uma nova questão, criamos um novo array para armazená-la
        if ($row['questao_id'] !== $current_question_id) {
            // Se a questão atual não é nula, então adicionamos ao array de questões
            if ($current_question !== null) {
                $questoes[] = $current_question;
            }
            // Inicializamos a nova questão
            $current_question_id = $row['questao_id'];
            $current_question = array(
                'questao_id' => $current_question_id,
                'texto_questao' => $row['texto_questao'],
                'enunciado' => $row['enunciado'],
                'alternativas' => array()
            );
        }
        // Adicionamos a alternativa à questão atual
        $current_question['alternativas'][] = array(
            'alternativa_id' => $row['alternativa_id'],
            'texto_alternativa' => $row['texto_alternativa'],
            'letra_alternativa' => $row['letra_alternativa']
        );
    }
    // Adicionamos a última questão ao array de questões
    if ($current_question !== null) {
        $questoes[] = $current_question;
    }
} else {
    echo "0 results";
}
