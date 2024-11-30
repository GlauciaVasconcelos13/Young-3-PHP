<?php 
    require_once '../../connection/conn.php';

    $sql_codigo = "SELECT * FROM produtos";
    $resultado = $mysqli->query($sql_codigo);

    if ($resultado->num_rows > 0){
        $infos = $resultado->fetch_all();
    }
    else {
        $infos = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Vendas</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <main>
        <h1>
            PRODUTOS
        </h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Tamanho</th>
                <th>Preço</th>
                <th>Quatidade</th>
                <th>Id do fornecedor</th>
                <th>Ações</th>
            </tr>
            <?php
                if(count($infos) == 0){
                    echo'<tr>
                            <td colspan = "4">Nada registrado</td>
                        </tr>';
                }
                else {
                    foreach($infos as $item){
                        $id = $item[0];
                        $nome = $item[1];
                        $marca = $item[2];
                        $tamanho = $item[3];
                        $preco = $item[4];
                        $quantidade = $item[5];
                        $id_fornecedores = $item[6];
                        echo'<tr>
                            <td>'. $id .'</td>
                            <td>'. $nome .'</td>
                            <td>'. $marca .'</td>
                            <td>'. $tamanho .'</td>
                            <td>'. $preco .'</td>
                            <td>'. $quantidade .'</td>
                            <td>'. $id_fornecedores .'</td>
                            <td><a href="formulario_editar.php?id='. $id .'">EDITAR</a> | <a href="../../db/deletar_fornecedor.php?id='. $id .'">DELETAR</a></td>
                        </tr>';
                    }
                }
            ?>
            <tr class="botoes">
                <td colspan = "4"><a href="produto.php">Adicionar</a></td>
            </tr>
        </table>
    </main>
</body>
</html>
