<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <div class="conteudo">
        <div class="container-central">
            <h1>Cadastre-se</h1>
            <div class="formulario-container">
                <form id="formulario" method="POST" action="proc_cad.php">
                    <div>
                        <input type="email" id="email" name="email" placeholder="@ Email" required><br>
                    </div>

                    <div>
                        <input type="password" id="senha" name="senha" placeholder="Senha" required>
                    </div>
                    <br>
                    <div>
                        <button type="submit">Continuar</button>
                    </div>
                </form>
            </div>
            <div id="linklogin" style="font-size: 16px;">
                <h3>Já tem uma conta? <a href='login.php'>Entrar</a></h3>
            </div>
        </div>
    </div>
</body>

</html>