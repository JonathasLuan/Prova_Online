<?php

session_start(); // Inicia a sessão no início do script
include_once("conexao.php");

if (isset($_POST['email'], $_POST['senha'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    // Consulta SQL usando prepared statement para evitar injeção de SQL
    $sql_code = "SELECT usuario_id, email, senha FROM usuario WHERE email = ? AND senha = ?";
    if ($stmt = $mysqli->prepare($sql_code)) {
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($usuario_id, $email, $senha);
            $stmt->fetch();

            // Define as variáveis de sessão
            $_SESSION['id'] = $usuario_id;
            $_SESSION['email'] = $email;

            // Redireciona para a página de resultado
            header("Location: resultado.php");
            exit(); // Termina a execução do script após o redirecionamento
        } else {
            // Exibe mensagem de erro se as credenciais forem inválidas
            echo "<p style='color:red; text-align: center; font-weight: bold;'>Falha ao logar! E-mail ou Senha incorretos.</p>";
        }
    } else {
        // Exibe mensagem de erro se houver um problema na consulta preparada
        echo "Erro ao preparar a consulta SQL.";
    }
} else {
    // Exibe mensagem de erro se os campos não forem enviados
    echo "<p style='color:red; text-align: center; font-weight: bold;'>Preencha todos os campos.</p>";
}
