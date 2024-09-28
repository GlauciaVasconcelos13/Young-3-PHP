<?php
    include ('../Conexoes/conexao_estoque.php');
    
    $sql_codico = 'SELECT * FROM itens';
    $resultado = $mysqli->query($sql_codico);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - Padaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">
        Padaria dos sonhos
    </h1>
    <main class="container">
        <table>
            <tr class = "cabecalho">
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php
                if ($resultado->num_rows >= 1){
                    while ($item = $resultado->fetch_assoc()){
                        echo '<tr class = "informacoes">';
                            echo '<td>'.$item['Nome'].'</td>';
                            echo '<td>'.$item['Quantidade'].'</td>';
                            echo '<td> <a href = "editar.php?id='.$item['Id'].'">Editar</a> </td>';
                            echo '<td>Deletar</td>';
                        echo '</tr>';
                    }
                }
            ?>
        </table>
    </main>
</body>
</html>