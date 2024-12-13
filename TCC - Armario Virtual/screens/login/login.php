<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Armário Virtual</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"defer></script>
</head>
<body>
    <main class="main">
        <div>
            <div>
                <h1>Armário Virtual</h1>
            </div>
            <form action="../cadastro/cadastrar.php" class="campo_login" method ="post">
                <h2>Sua vida fashion sendo muito mais prática!</h2>
                <div>
                    <label for="" class="form-label">Usuário:   </label>
                    <input type="text" class="form-control" name = "user" placeholder = "Digite o seu usuário...">
                </div>
                <div>
                    <label for="" class="form-label">Senha:   </label>
                    <input type="pass" class="form-control" name = "pass" placeholder = "Digite a sua senha...">
                </div>
                <div>
                    <button type="submit" class="botao"><a href="menu.php">Entrar</a></button>
                </div>
                <div>
                    <button type="submit">Entre e tenha uma vida glamurosa!</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>