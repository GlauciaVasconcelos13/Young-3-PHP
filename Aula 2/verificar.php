<?php
    include_once('conexao.php');

    session_start ();

    $usuario = $_POST ['user'];
    $senha = $_POST ['pass'];

    if(isset($usuario) && isset ($senha)) {
        $sql_codico = "SELECT * FROM cliente WHERE usuario = '$usuario' AND senha = '$senha'";

        $sql_query = $mysqli->query($sql_codico);

        $quantidade_linhas = $sql_query->num_rows;

        if ($quantidade_linhas == 1) {
            $_SESSION['user'] = $usuario;
            $_SESSION['pass'] = $senha;
            header('Location: painel.php');
        }else{
            header('Location: index.php?error');
        }
    }
?>