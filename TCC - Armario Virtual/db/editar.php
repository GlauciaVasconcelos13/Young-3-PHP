<?php
    //Conectar o banco de dados
    include ('../connection/conn-login.php');

    $id = $_GET['id'];
    $sql_codigo = "SELECT * FROM roupas WHERE id_pessoa = '$id'";
    $resultado = $mysqli->query($sql_codigo);
    $item = $resultado->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $id = $_POST['id'];
        $roupa = $_POST['roupa'];
        $data = $_POST['data'];
        $evento = $_POST['evento'];
        $estilo = $_POST['estilo'];
        $quantidade = $_POST['quantidade'];

        $sql_codigo = "UPDATE roupas SET roupa_do_dia='$roupa', data = '$data', nome_evento = '$evento', estilo = '$estilo',  quantidade='$quantidade' WHERE id_pessoa='$id'";

        if ($mysqli->query($sql_codigo) === TRUE){
            header ('Location: ../screens/roupas/roupas_painel.php');

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
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class = "body">
    <h1>Editar Item</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value = "<?php echo $id;?>">
        <label for="">Roupa</label>
        <input type="text" name="roupa" value="<?php echo $item['roupa_do_dia'];?>" placeholder = "Digite a roupa do dia" required>
        <label for="">Data</label>
        <input type="date" name="data" value = "<?php echo $item['data'];?>" placeholder = "XX/XX/XXXX" required>
        <label for="">Nome do evento</label>
        <input type="text" name="evento" value = "<?php echo $item['nome_evento'];?>" placeholder = "Digite qual será o evento do dia" required>
        <label for="">Estilo</label>
        <input type="text" name="estilo" value = "<?php echo $item['estilo'];?>" placeholder = "Digite qual será o evento do dia" required>
        <label for="">Quantidade</label>
        <input type="number" name="quantidade" value="<?php echo $item['quantidade']; ?>" placeholder = "Digite o quantidade do item" required>
        <input class = "salvar" type="submit" value="Salvar" required>

    </form>
    <a class = "add" href="../screens/roupas/roupas_painel.php">Voltar</a>
</body>
</html>