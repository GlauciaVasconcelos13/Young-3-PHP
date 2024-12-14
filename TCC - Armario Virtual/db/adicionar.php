<!-- Adiciona no banco -->


<?php
    include ('../connection/conn-login.php');

    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $roupa = $_POST['roupa'];
        $data = $_POST['data'];
        $evento = $_POST['evento'];
        $estilo = $_POST['estilo'];
        $quantidade = $_POST['quantidade'];

        $sql_codigo = "INSERT INTO roupas (roupa_do_dia,data,nome_evento,estilo,quantidade) VALUES('$roupa','$data', '$evento', '$estilo', '$quantidade')";

        if ($mysqli->query($sql_codigo) === TRUE){
            header ('Location: ../screens/roupas/roupas_painel');

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
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class = "body">
    <h1>Adicionar Roupa</h1>
    <form action="" method="post">
        <label for="">Roupa do dia</label>
        <input type="text" name="roupa" placeholder = "Digite o nome do item" required>
        <label for="">Data</label>
        <input type="date" name="data" placeholder = "XX/XX/XXXX" required>
        <label for="">Nome do evento</label>
        <input type="text" name="evento" placeholder = "Digite qual será o evento do dia" required>
        <label for="">Estilo</label>
        <input type="text" name="estilo" placeholder = "Digite qual será o evento do dia" required>
        <input type="number" name="quantidade" placeholder = "Digite a quantidade de itens" required>
        <input class= "salvar" type="submit" value="Salvar" required>

    </form>
    <a href="../screens/roupas/roupas_painel.php" class = "add">Voltar</a>
</body>
</html>