<?php
    include ('../../connection/conn-login.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        

        $sql_codigo = "INSERT INTO usuarios (nome,usuario,senha) VALUES('$nome','$user','$pass')";

        if ($mysqli->query($sql_codigo) === TRUE){
            $_SESSION['nome'] = $nome;
            header ('Location: ../roupas/roupas_painel.php?cadastrado=sim');

        }
        else {
            echo 'Erro ao atualizar!!!!' . $mysqli->error;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
    <link rel="stylesheet" href="../../CSS/cadastrar.css" type = "text/css">
    <script src="../JS/script.js" defer></script>
</head>
<body class = "body">
    <h1>Cadastro</h1>
    <form action="" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder = "Digite o seu nome" required>
        <label for="">Usuário</label>
        <input type="text" name="user" placeholder = "Crie um usuário" required>
        <label for="">Senha</label>
        <input type="text" name="pass" placeholder = "Crie uma senha" required>

        <input id = "cadastro" type="submit" value = "Cadastrar">
        
    </form>
    <a href="../login/login.php" class = "add">Voltar</a>
</body>
</html>