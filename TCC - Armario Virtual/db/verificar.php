<!-- SEM ERRO -->

<?php
    include_once('../connection/conn-login.php');

    session_start ();

    $usuario = $_POST ['user'];
    $senha = $_POST ['pass'];

    if(isset($usuario) && isset ($senha)) {
        $sql_codigo = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        $sql_query = $mysqli->query($sql_codigo);

        $quantidade_linhas = $sql_query->num_rows;

        if ($quantidade_linhas == 1) {
            $resultado = $sql_query->fetch_assoc();

            $_SESSION['id'] = $resultado ['id'];
            
            header('Location: ../screens/roupas/roupas_painel?cadastrado=nao');}
        else{
            header('Location: ../screens/login/login.php?error');
        }
    }
?>