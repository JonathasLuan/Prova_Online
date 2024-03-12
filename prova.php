<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
    <link rel="stylesheet" href="index.css">
    <style>
        #questionario {
            width: 65%;
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        main {
            padding: 40px;
        }

        .alters {
            margin-left: 20px;
        }

        .text_quest {
            background-color: #dbdbdb;
            border: 1px solid;
            padding: 10px;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .quest h4 {
            background-color: black;
            width: 4%;
            text-align: center;
            padding: 5px;
            color: white;
            border-bottom-right-radius: 10px;
        }

        .quest_num {
            display: flex;
            align-items: center;
        }

        .quest_num span {
            margin-right: 3px;
            background-color: grey;
            text-align: center;
            padding: 5px;
            color: white;
            border-bottom-right-radius: 10px;
        }

        .submit {
            padding: 10px;
            background-color: blue;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            float: right;
        }
    </style>
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