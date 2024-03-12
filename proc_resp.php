<?php
include("conexao.php");

$sql = "SELECT * FROM respostas";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $resp = $_POST["resposta_<?php echo $questao['questao_id']; ?>"]
}