<?php
    include ('../Conexoes/conexao_estoque.php');

    $id = $_GET['id'];
    $sql_codigo = "DELETE FROM itens WHERE id='$id'";
    if ($mysqli->query($sql_codigo) === TRUE){
        header ('Location: index.php');

    }
    else {
        echo 'Erro ao atualizar' . $mysqli->error;
    }
?>