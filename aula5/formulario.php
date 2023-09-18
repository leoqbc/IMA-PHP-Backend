<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de produto</title>
</head>
<body>
    <h1>Cadastre seu produto</h1>
    <form action="processa_produto.php" method="GET">
        <div>
            <label>Nome:</label>
            <input name="nome_produto" type="text">
        </div>
        <div>
            <label>Preço:</label>
            <input name="preco_produto" step="any" type="number">
        </div>
        <div>
            <label>Categoria:</label>
            <select name="categoria_produto">
                <option value="1">Roupas</option>
                <option value="2">Casa</option>
                <option value="3">Eletronicos</option>
            </select>
        </div>
        <button>Cadastrar</button>
        <button type="reset">Apagar</button>
    </form>
</body>
</html>