!-- <?php
    include ('../Conexoes/conexao_login.php');
    
    $sql_codigo = 'SELECT * FROM itens';
    $resultado = $mysqli->query($sql_codigo);
    
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Padaria dos sonhos</title>
    <link rel="stylesheet" href= "login.css">
</head>
<body>
    <main>
        <form action="info.php" method = "post">
            <div class="login">
                <h1 class="titulo-login">
                    Login do Usuário - Padaria dos sonhos
                </h1>
                <div>
                    <label for="">User</label>
                    <input type="text" name ="user">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name = "pass">
                </div>
                <button type="submit">Login</button>
            </div>
        </form>
    </main>
</body>
</html>