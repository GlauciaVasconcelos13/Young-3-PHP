<?php
    require_once '../../connection/conn.php'; // sair da fornecedores ir a aula 7 e entrar em connection e conn
    
    $sql_codigo = 'SELECT * FROM fornecedores';
    $resultado = $mysqli->query($sql_codigo);

    if($resultado->num_rows > 0){
        $infos = $resultado->fetch_all();
    }
    else{
        $infos = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores - Vendas</title>
    <link rel="stylesheet" href="fornecedores.css">
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
                        $cidade = $item[2];
                        echo'<tr>
                            <td>'. $id .'</td>
                            <td>'. $nome .'</td>
                            <td>'. $cidade .'</td>
                            <td><a href="">EDITAR</a> | <a href="../../db/deletar_fornecedor.php?id='. $id .'">DELETAR</a></td>
                        </tr>';
                    }
                }
            ?>
            <tr>
                <td colspan = "4"><a href="formulario.php">Adicionar</a></td>
            </tr>
        </table>
    </main>
</body>
</html>