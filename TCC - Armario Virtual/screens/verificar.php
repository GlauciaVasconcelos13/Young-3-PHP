<?php
    include_once('../connection/conn-login.php');

    session_start();

    // Verifica se os dados foram enviados
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $usuario = $_POST['user'];
        $senha = $_POST['pass'];

        // Prepara a consulta para evitar SQL Injection
        $sql = "SELECT id FROM usuarios WHERE usuario = ? AND senha = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $usuario, $senha); // "ss" indica que ambos os parâmetros são strings
        $stmt->execute();
        $stmt->store_result();

        // Verifica se encontrou um usuário
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id);
            $stmt->fetch();

            $_SESSION['id'] = $id;
            header('Location: ../screens/menu.php?cadastrado');
        } else {
            header('Location: ../screens/login/login.php?error');
        }

        $stmt->close();
    }
?>
