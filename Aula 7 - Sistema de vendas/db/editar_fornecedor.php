<?php
    require_once '../connection/conn';

    $id = $_POST['$id'];
    $nome = $_POST['$nome'];
    $cidade = $_POST['$cidade'];

    $sql_codigo = "UPDATE fornecedores SET nome='$nome', cidade='$cidade' WHERE id='$id'";

    $resultado = $mysqli->query($sql_codigo);

    if ($resultado===TRUE){
        header("location:../screens/fornecedores/fornecedores_painel.php");
    }
    
    else{
        
        header("location:../screens/fornecedores/fornecedores_painel.php?error");
    }
?>