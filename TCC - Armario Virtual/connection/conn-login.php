<?php 
// VARIÁVEIS DE AMBIENTE
$servidor = 'localhost';
$banco_de_dados = 'armario_virtual';
$usuario = 'root';
$senha = '';

// CRIA CONEXÃO COM BANCO DE DADOS
$mysqli = new mysqli($servidor, $usuario, $senha);

// VERIFICA A CONEXÃO
if ($mysqli->connect_error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->connect_error);
}

// VERIFICAR SE EXISTE O BANCO DE DADOS
$sql_check_db = "SHOW DATABASES LIKE '$banco_de_dados'";
$resultado = $mysqli->query($sql_check_db);

if ($resultado->num_rows == 0) {
    $sql_codigo = "CREATE DATABASE $banco_de_dados";
    if ($mysqli->query($sql_codigo) === TRUE) {
        // echo 'Banco criado com sucesso';
    } else {
        die("Erro ao criar o banco de dados: " . $mysqli->error);
    }
} else {
    // echo "Banco de dados já existe! \n";
}

// SE CONECTA AO BANCO DE DADOS RECÉM CRIADO
$mysqli->select_db($banco_de_dados);

// CRIANDO TABELAS
$tabelas = [
    "usuarios" => "
        CREATE TABLE usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            usuario VARCHAR(50) NOT NULL,
            senha VARCHAR(255) NOT NULL
        )
    ",
    "roupas" => "
        CREATE TABLE roupas (
            id_pessoa INT AUTO_INCREMENT PRIMARY KEY,
            roupa_do_dia VARCHAR(255) NOT NULL,
            data DATE NOT NULL,
            estilo VARCHAR(50) NOT NULL,
            quantidade INT NOT NULL,
            nome_evento VARCHAR(255) NOT NULL
        )
    "
];

foreach ($tabelas as $nome => $sql) {
    $sql_check_table = "SHOW TABLES LIKE '$nome'";
    $resultado = $mysqli->query($sql_check_table);

    if ($resultado->num_rows == 0) {
        if ($mysqli->query($sql) === TRUE) {
            // echo "Tabela '$nome' criada com sucesso!<br>";
        } else {
            // echo "Erro ao criar tabela '$nome': " . $mysqli->error . "\n";
        }
    } else {
        // echo "Tabela '$nome' já existe<br>";
    }
}

// FECHA A CONEXÃO
// $mysqli->close();
?>