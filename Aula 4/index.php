<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <main class="container">
        <h1>Top Vendas</h1>
        <form action = "verificar.php" method = "post" class="container-input">
            <input type="text" name ="pesquisa" id = "pesquisa">
            <button type="submit">🔍</button>
        </form>

        <table>
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <!-- CODICO PHP -->
        </table>
    </main>
</body>
</html>