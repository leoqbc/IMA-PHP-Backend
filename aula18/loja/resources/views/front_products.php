<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Web</title>
</head>
<body>
    <h1>Produtos da loja</h1>

    <div id="produtos">

    </div>

    <script>
        function produtoString(produto) {
            return `
                <div>
                    <div>${produto.name}</div>
                    <div>${produto.description}</div>
                    <div>
                        <img width="100" src="${produto.profile}" />
                    </div>
                </div>
                `;
        }

        const produtosHtml = document.getElementById('produtos');

        const produtos = fetch('http://localhost:8000/api/products')
                            .then((response) => response.json())
                            .then((json) => {
                                json.forEach((produto) => {
                                    produtosHtml.innerHTML += produtoString(produto);
                                });
                            });

        
    </script>
</body>
</html>