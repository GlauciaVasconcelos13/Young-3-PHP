<!-- SEM ERRO -->

<?php
    include_once('../../Conexoes/conexao_sistema.php');

    session_start ();

    $usuario = $_POST ['user'];
    $senha = $_POST ['pass'];

    if(isset($usuario) && isset ($senha)) {
        $sql_codigo = "SELECT * FROM cliente WHERE usuario = '$usuario' AND senha = '$senha'";

        $sql_query = $mysqli->query($sql_codigo);

        $quantidade_linhas = $sql_query->num_rows;

        if ($quantidade_linhas == 1) {
            $resultado = $sql_query->fetch_assoc();

            $_SESSION['id'] = $resultado ['id'];
            
            header('Location: ../../../roupas/painel.php?cadastrado=nao');}
        else{
            header('Location: ../../../login/login.php?error');
        }
    }
?>