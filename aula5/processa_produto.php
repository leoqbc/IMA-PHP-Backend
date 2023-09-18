<?php
// processar(receber os dados de uma página)

// SUPER GLOBAIS de captura de campos
// $_GET ou $_POST

// $_GET["nome_produto"]
// $_GET['preco_produto']
// ...

$preco = number_format($_GET['preco_produto'], 2, ',', '.');

// echo 'Nome do produto: ' . $_GET['nome_produto'];
// echo '<br>';
// echo 'Preço do produto: R$ ' . $preco;
// echo '<br>';
// echo 'Categoria: ' . $_GET['categoria_produto'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de exibição</title>
</head>
<body>
    <div>Preço: R$ <?=$preco?></div>
</body>
</html>