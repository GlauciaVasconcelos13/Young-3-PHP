<?php
$usuario = $_POST ['user'];
$senha = $_POST ['pass']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Informações</h1>
        <?php
            echo "<span>Bem vindo, $usuario!! </span>";
            echo "<span>A sua senha é: $senha</span>";
        ?>
    </main>
</body>
</html>