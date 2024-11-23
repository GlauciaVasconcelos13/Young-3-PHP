<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
</head>
<body>
    <main>
        <h1>CADASTRAR FORNECEDORES</h1>
        <form action="../../db/criar_fornecedor.php" method="post">
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" required>
            </div>
            <div>
                <button type="submit">Cadastrar</button>
                <button><a href="fornecedores_painel.php">Voltar</a></button>
            </div>
        </form>
    </main>
</body>
</html>