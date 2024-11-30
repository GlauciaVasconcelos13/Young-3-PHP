<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../../CSS/cadastro.css">
    <script src="../../JS/script.js" defer></script>
</head>
<body>
    <main>
      <form action="../../db/criar_fornecedor.php" method="post">
          <h1>CADASTRAR PRODUTOS</h1>
            <div>
                <label for="nome">Nome:  </label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="marca">Marca: </label>
                <input type="text" name="marca" id="marca" required>
            </div>
            <div>
                <label for="tamanho">Tamanho: </label>
                <input type="text" name="tamanho" id="tamanho" required>
            </div>
            <div>
                <label for="tamanho">Preço: </label>
                <input type="text" name="preco" id="preco" required>
            </div>
            <div>
                <label for="tamanho">Quantidade </label>
                <input type="text" name="quantidade" id="quantidade" required>
            </div>
            <div>
                <label for="tamanho">ID Fornecedores </label>
                <input type="text" name="id_fornecedores" id="id_fornecedores" required>
            </div>
            <div class="botoes">
                <button class = "cadastrar-mais" type="submit">Cadastrar</button>
                <button><a href="produtos_painel.php">Voltar</a></button>
            </div>
        </form>
    </main>
</body>
</html>