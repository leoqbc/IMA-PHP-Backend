<?php

/**
 * Desafio da Aula 02
 * Criar variáveis para realizar a troca no código (texto entre [])
 * seguindo o exemplo do nome
 */

$nomeCliente = 'Aline Farias';

// camelCase ex: palavraMuitoGrandeAqui
$nomeEmpresa = 'IMA Tech';

$nomeProduto = 'Travesseiro da Nasa';

$precoProduto = number_format(1123.22, 2, ',', '.');

$dataDeEntrega = '20/10/2023';

$cashBack = number_format(3.00, 2, ',', '.');

//snale_case ex: palavra_muito_grande_aqui
// $snake_case
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página dinâmica</title>
</head>
<body>
    <h1>Olá <?php echo $nomeCliente; ?></h1>
    <p>Seja bem vindo ao site: <?php echo $nomeEmpresa ?></p>
    <p>Seu produto <?=$nomeProduto?> no preço <?=$precoProduto?> está sendo preparado e será entrega no dia <?=$dataDeEntrega?></p>
    <p>Esta compra lhe gerou um cashback de <?=$cashBack?>.
</body>
</html>