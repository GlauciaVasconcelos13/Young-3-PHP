<!-- SEM ERRO -->

<?php
    include ('../../connection/conn-login.php');
    
    $sql_codigo = 'SELECT * FROM roupas';
    $resultado = $mysqli->query($sql_codigo);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armário Virtual</title>
    <link rel="stylesheet" href="../../CSS/roupas.css">
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
                <th>Ações</th>
            </tr>
            <?php
                if ($resultado->num_rows >= 1){
                    while ($item = $resultado->fetch_assoc()){
                        echo '<tr class = "informacoes">';
                            echo '<td>'.$item['id_pessoa'].'</td>';
                            echo '<td>'.$item['roupa_do_dia'].'</td>';
                            echo '<td>'.$item['data'].'</td>';
                            echo '<td>'.$item['estilo'].'</td>';
                            echo '<td>'.$item['quantidade'].'</td>';
                            echo '<td>'.$item['nome_evento'].'</td>';
                            echo '<td> <a href = "../../db/deletar.php?id='.$item['id_pessoa'].'">Deletar</a> </td>';
                            echo '<td> <a href = "../../db/editar.php?id='.$item['id_pessoa'].'">Editar</a> </td>';
                        echo '</tr>';
                    }
                }
            ?>
            <tr>
                <td class = "add" colspan="8" align="center">
                    <?php
                    echo '<a type "submit" class = "botao_add" href = "../../db/adicionar.php">Adicionar</a>';
                    ?>
                </td>

            </tr>
            <tr>
                <td class = "add" colspan = "8"  align="center">
                    <?php
                    echo '<a type "submit" class = "previsao" href = "../../../Previsao/index.html">Confira a previsão do tempo do dia!</a>';
                    ?>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>