<?php 
$servidor ='localhost';
$banco_de_dados = 'login_padaria';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $banco_de_dados, $usuario, $senha);

if ($mysqli -> error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>