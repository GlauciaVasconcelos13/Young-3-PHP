<?php
    include ('../Conexoes/conexao_loja.php');
    //QUERY
    $sql_codigo = "SELECT f.nome, SUM(vendas.quantidade) AS total_comprado FROM vendas JOIN vendedores v ON vendas.vendedor_id = v.id JOIN filiais f on v.filial_id = f.id GROUP BY f.nome";

    $sql_query = $mysqli->query($sql_codigo);
    
    $infos = $sql_query->fetch_all ();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Total de vendas</title>
        <link rel = "stylesheet" href = "style.css">
    </head>

    <body>
        <main class = "container-principal">
            <h1 class = "titulo">Vendas por Filial - Total</h1>
            <div class = "container-titulo">
                <div>Nome da Filial</div>
                <div>Total de Vendas</div>
            </div>
            <?php
        foreach ($infos as $linha){
            $nome = $linha[0];
            $total_comprado = $linha[1];
            echo '<div class = "container">';
            echo '<div class = "nomes">'.$nome.'</div>';
            echo '<div>'.$total_comprado.'</div>';
            echo '</div>';
        }
        ?>
        </main>
</body>
</html>