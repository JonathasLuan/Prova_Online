<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="campologin">
        <h1>LOGIN</h1>
        <div class="formulario-container">
            <h3>Entre com sua conta!</h3>
            <form action="proc_login.php" method="POST">
                <div>
                    <input type="email" id="email" name="email" placeholder="@ Email" required><br>
                </div>

                <div>
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>

                <div>
                    <button id="btn-enter" type="submit">Entrar</button>
                </div>
            </form>
        </div>
        <div id="cadastro" style="font-size: 16px;">
            <h3>Ainda não tem uma conta? <a href='cadastro.php'>Cadastre-se</a></h3>
        </div>
    </div>
</body>

</html>