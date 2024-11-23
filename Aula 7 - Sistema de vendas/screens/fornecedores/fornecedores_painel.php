<?php
    require_once '../../connection/conn.php'; // sair da fornecedores ir a aula 7 e entrar em connection e conn
    
    $sql_codigo = 'SELECT * FROM fornecedores';
    $resultado = $mysqli->query($sql_codigo);
    var_dump($resultado);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores - Vendas</title>
    <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
    <main>
        <h1>
            FORNECEDORES
        </h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Maria</td>
                <td>São Paulo</td>
                <td><a href="">EDITAR</a> | <a href="">DELETAR</a></td>
            </tr>
            <tr>
                <td colspan = "4">Adicionar</td>
            </tr>
        </table>
    </main>
</body>
</html>