
<?php
    require_once = '../connection/conn.php';

    $id = $_GET['id'];
    $sql_codigo = "DELETE FROM fornecedores WHERE id='$id'";
    if ($mysqli->query($sql_codigo) === TRUE){
        header ('Location: ../screens/fornecedores/fornecedores.php');
    }
    else {
        echo 'Erro ao atualizar' . $mysqli->error;
    }
?>