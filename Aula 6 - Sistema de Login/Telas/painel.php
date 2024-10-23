<?php
    include ('../../Conexoes/conexao_sistema.php');
    session_start ();
    $id = $_SESSION['id'];
    $sql_codigo = "SELECT * FROM itens WHERE id ='$id'";
    $sql_codigo_usuario = "SELECT nome FROM cliente WHERE id='$id'";

    $resultado_nome = $mysqli->query($sql_codigo_usuario);
    $nome_usuario = $resultado_nome->fetch_assoc();

    $nome = $nome_usuario['nome'];
    $resultado = $mysqli->query($sql_codigo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1 class="titulo">
        Lista de Compras - <?php echo 'Bem-vindo '. $nome;?>
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
                            echo '<td>'.$item['nome'].'</td>';
                            echo '<td>'.$item['quantidade'].'</td>';
                            echo '<td> <a href = "deletar.php?id='.$item['id'].'">Deletar</a> </td>';
                            echo '<td> <a href = "editar.php?id='.$item['id'].'">Editar</a> </td>';
                        echo '</tr>';
                    }
                }
            ?>
            <tr>
                <td class = "add" colspan = "4">
                    <?php
                    echo '<a type "submit" class = "botao_add" href = "adicionar.php">Adicionar</a>';
                    echo '<a type "submit" class = "botao_add" href = "deletar.php">Deletar</a>';
                    echo '<a type "submit" class = "botao_add" href = "editar.php">Editar</a>';
                    ?>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>