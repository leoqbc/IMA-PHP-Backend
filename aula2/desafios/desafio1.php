<?php

/**
 * Desafio da Aula 02
 * Criar variáveis para realizar a troca no código (texto entre [])
 * seguindo o exemplo do nome
 */

$nomeCliente = 'Um nome aqui';

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
    <p>Seja bem vindo ao site: [Nome da empresa]</p>
    <p>Seu produto [nome do produto] no preço [preço do produto] está sendo preparado e será entrega no dia [data de entrega]</p>
    <p>Esta compra lhe gerou um cashback de [cash back da compra].
</body>
</html>