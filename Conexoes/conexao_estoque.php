<?php 
$servidor ='localhost';
$banco_de_dados = 'estoque';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

if ($mysqli -> error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

$sql_codico = "SELECT * FROM estoque";

$sql_query = $mysqli->query($sql_codico);

$quantidades_linhas = $sql_query->num_rows;

if ($quantidades_linhas > 1){
    $dados = $sql_query->fetch_all();
    var_dump ($dados);
}
?>