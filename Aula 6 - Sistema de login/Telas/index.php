<!-- SEM ERRO -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Padaria dos Sonhos</title>
    <link rel="stylesheet" href="../CSS/login.css" type="text/css">
    
</head>
<body>
    <main>
        <div>
            <div>
                <div>
                    <h1 class = "h1">LOGIN</h1>
                </div>
                <form class="campo_login" action = "verificar.php" method = "post">
                    <div>
                        <label class = "form-label">Usuário: </label>
                        <input name="user" class = "form-control" type="text" placeholder = "Digite o seu usuário">
                    </div>
                    <div>
                        <label class = "form-label">Senha: </label>
                        <input name="pass" class = "form-control" type="pass" placeholder = "Digite a sua senha">
                    </div>
                    <div>
                        <button type="submit">Entrar</button>
                    </div>
                    <div>
                        <a class = "cadastro" href = "cadastrar.php">Cadastrar</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>