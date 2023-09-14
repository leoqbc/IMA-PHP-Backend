<?php
// modo mais estrito de tipos no PHP
declare(strict_types=1);

// Função que tira a média de 2 numeros
function media(float $valor1, float $valor2): float {
    $soma = $valor1 + $valor2;
    $resultado = $soma / 2;
    return $resultado;
}

function mediaSimples(float $valor1, float $valor2): float {
    return ($valor1 + $valor2) / 2;
}

$a = 10;
$b = 15;

$media = media($a, $b);

$media1 = media(10, 5);
$media2 = media(8, 100);
$mediaDificil = media($media1, $media2);
$mediaDificil = media(media(10, 5), media(8, 100));

// (((10 + 5) / 2) + ((8 + 100) / 2)) / 2

echo $mediaDificil;