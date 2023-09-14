<?php

$numero = 100;
$porcentagem1 = calculaPorcentagem($numero, 20);
echo $porcentagem1;

echo '<hr>';

// Entrou no PHP 8.0
$valor2 = 130_000;
$porcentagem2 = $valor2 + calculaPorcentagem($valor2, 5.5);
echo $porcentagem2;

// Função: trecho de código reaproveitável
// declaração de uma função
// função recebe obrigatóriamente um valor e uma porcentagem
function calculaPorcentagem(float $valor, float $porcentagem): float {
    $total = $valor * ($porcentagem / 100);
    return $total;
}
