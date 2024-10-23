<?php 
$servidor ='localhost';
$banco_de_dados = 'login_padaria';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $banco_de_dados, $usuario, $senha);

if ($mysqli -> error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

$sql_codico = "SELECT * FROM login_padaria";

$sql_query = $mysqli->query($sql_codico);

$quantidades_linhas = $sql_query->num_rows;

if ($quantidades_linhas > 1){
    $dados = $sql_query->fetch_all();
    var_dump ($dados);
}
?>