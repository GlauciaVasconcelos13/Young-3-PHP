<?php
    include ('../connection/conn-login.php');

    $id = $_GET['id'];
    $sql_codigo = "DELETE FROM roupas WHERE id_pessoa='$id'";
    if ($mysqli->query($sql_codigo) === TRUE){
        header ('Location: ../screens/roupas/roupas_painel.php');

    }
    else {
        echo 'Erro ao atualizar' . $mysqli->error;
    }
?>