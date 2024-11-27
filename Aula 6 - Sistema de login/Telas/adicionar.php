
<?php
    include ('../../Conexoes/conexao_sistema.php');
    session_start();
    $id = $_SESSION ['id'];


    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];

        $sql_codigo = "INSERT INTO itens (nome,quantidade,id_user) VALUES('$nome','$quantidade','$id')";

        if ($mysqli->query($sql_codigo) === TRUE){
            header ('Location: painel.php');

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
    <title>Adicionar Itens</title>
    <link rel="stylesheet" href="../../CSS/style.css" type = "text/css">
</head>
<body class = "body">
    <h1>Adicionar Item</h1>
    <form action="" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder = "Digite o nome do item" required>
        <input type="number" name="quantidade" placeholder = "Digite a quantidade de itens" required>
        <input class= "salvar" type="submit" value="Salvar" required>

    </form>
    <a href="painel.php" class = "add">Voltar</a>
</body>
</html>