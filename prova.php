<?php
// Inicia a sessão do PHP
session_start();

if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
    header('Location: login.php');
    return;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    include("proc_quest.php");
    ?>
    <main>
        <h1>Prova Online</h1>
        <p></p>
        <div id="questionario">
            <form action="proc_resp.php" method="POST">
                <?php
                // Exibição do modelo de questão com os dados dinâmicos
                include 'modelo_questao.php'; // Arquivo contendo o modelo de questão HTML
                ?>
                <input class="submit" type="submit" value="Finalizar">
            </form>
        </div>
    </main>
</body>

</html>