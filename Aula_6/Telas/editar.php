<?php
    //Conectar o banco de dados
    include ('../../Conexoes/conexao_sistema.php');

    $id = $_GET['id'];
    $sql_codigo = "SELECT * FROM itens WHERE Id = '$id'";
    $resultado = $mysqli->query($sql_codigo);
    $item = $resultado->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];

        $sql_codigo = "UPDATE itens SET nome='$nome', quantidade='$quantidade' WHERE id='$id'";

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
    <title>Editar Itens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class = "body">
    <h1>Editar Item</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value = "<?php echo $id;?>">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php echo $item['Nome'];?>" placeholder = "Digite o nome do item" required>
        <input type="number" name="quantidade" value="<?php echo $item['Quantidade'];?>" placeholder = "Digite o quantidade do item" required>
        <input class = "salvar" type="submit" value="Salvar" required>

    </form>
    <a class = "add" href="painel.php">Voltar</a>
</body>
</html>