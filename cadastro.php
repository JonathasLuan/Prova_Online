<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <div class="form_cad">
        <h1>Cadastre-se</h1>
        <form action="proc_cad.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>