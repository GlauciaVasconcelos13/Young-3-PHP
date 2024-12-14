<?php
    include ('../../connection/conn-login.php');
    
    $sql_codigo = 'SELECT * FROM itens';
    $resultado = $mysqli->query($sql_codigo);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armário Virtual</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">
        Closet

    </h1>
    <main class="container">
        <table>
            <tr class = "cabecalho">
                <th>Id</th>
                <th>Roupa do dia</th>
                <th>Data</th>
                <th>Estilo</th>
                <th>Quantidade</th>
                <th>Nome do Evento</th>
            </tr>
            <?php
                if ($resultado->num_rows >= 1){
                    while ($item = $resultado->fetch_assoc()){
                        echo '<tr class = "informacoes">';
                            echo '<td>'.$item['Id'].'</td>';
                            echo '<td>'.$item['Roupa do dia'].'</td>';
                            echo '<td>'.$item['Data'].'</td>';
                            echo '<td>'.$item['Estilo'].'</td>';
                            echo '<td>'.$item['Quantidade'].'</td>';
                            echo '<td>'.$item['Nome do evento'].'</td>';
                            echo '<td> <a href = "../../db/deletar.php?id='.$item['Id'].'">Deletar</a> </td>';
                            echo '<td> <a href = "../../db/editar.php?id='.$item['Id'].'">Editar</a> </td>';
                        echo '</tr>';
                    }
                }
            ?>
            <tr>
                <td class = "add" colspan = "4">
                    <?php
                    echo '<a type "submit" class = "botao_add" href = "../../db/adicionar.php">Adicionar</a>';
                    ?>
                </td>
            </tr>
            <tr>
                <td class = "add" colspan = "4">
                    <?php
                    echo '<a type "submit" class = "previsao" href = "../Previsao">Confira a previsão do tempo do dia!</a>';
                    ?>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>