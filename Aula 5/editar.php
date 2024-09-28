<?php
    //Conectar o banco de dados
    include ('../Conexoes/conexao_estoque.php');

    $id = $_GET['id'];

    $sql_codico = "SELECT * FROM itens WHERE Id = '$id'";
    $resultado = $mysqli->query($sql_codico);
    $item = $resultado->fetch_assoc();

    // var_dump($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Item</h1>
    <form action="" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php echo $item['Nome'];?>" required>
        <input type="number" name="quantidade" value="<?php echo $item['Quantidade']; ?>" required>
        <input type="submit" value="Salvar" required>

    </form>
    <a href="index.php">Voltar</a>
</body>
</html>