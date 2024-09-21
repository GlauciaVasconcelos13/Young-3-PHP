<?php
    session_start();

    if(isset($_GET['ok'])) {
        $itens = $_SESSION['Itens'];

    }
    else {
        $itens = [];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="style.css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: "Righteous", cursive;
    background-color: #cfbdbf;
    display: flex;
    width: 100vw;
    height: 100vh;
    justify-content: center;
    align-items: center;
}

h1 {
    text-align: center;
    color: #ff4845;
}
.tabela {
    background-color: #e5e5e5;
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
}

.titulo-tabela {
    color: #035faf;
    font-size: 20px;
    margin: 10px;
}

.container-input {
    
}
    </style>



</head>
<body class = "body">
    <main class="container">
        <h1>Top Vendas</h1>
        <form action = "verificar.php" method = "post" class="container-input">
            <input type="text" name ="pesquisa" id = "pesquisa">
            <button type="submit">🔍</button>
        </form>

        <table class = "tabela">
            <tr class = "titulo-tabela">
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <?php if (!empty($itens)):?>
                <?php foreach ($itens as $item):?>
                    <tr class = "itens">
                        <td><?php echo htmlspecialchars($item[0]);?></td>
                        <td><?php echo htmlspecialchars($item[1]);?></td>
                        <td><?php echo htmlspecialchars($item[2]);?></td>
                        <td><?php echo htmlspecialchars($item[3]);?></td>

                    </tr>
                <?php endforeach;?>
            <?php else: ?>
                <tr>
                    <td colspen = "4" style="text-align:center;">Nenhum item encontrado!</td>
                </tr>
            <?php endif;?>

        </table>
    </main>
</body>
</html>