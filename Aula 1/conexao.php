<?php
$servidor = 'localhost';
$banco_de_dados = 'cy3_sab_10h';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

var_dump($mysqli);

if ($mysqli -> error) {
    die ("Falha ao conectar ao banco de dados:" .$mysqli->error);
}

$sql_codico = "SELECT * FROM filiais";

$sql_query = $mysqli->query($sql_codico);

$quantidades_linhas = $sql_query->num_rows;

if ($quantidades_linhas > 1){
    $dados = $sql_query->fetch_all();
    var_dump ($dados);
}
?>