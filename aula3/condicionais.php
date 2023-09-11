<?php

$nome = '';

// vaiáveis nulas por padrão
$nula = null;

if ($nome == 'Amanda') {
    echo 'Olá Amanda';
} else {
    echo 'Olá alguém';
}

// positivo
if (1 == '1') {

}

// 1 inteiro não é igual a 1 string
// só funcionaria se fosse 1 === 1
if (1 === '1') {

}

// Operadores comparação 
// igual dade == ou ===
// diferença: != ou !== ou <>
// menor que: < ou <=
// maior que: > ou >=

// condição com e
// $a = 1;
// $b = 12;
// $c = 4;
// $a === 1 && $b > 10 && $c < 5;

// condição com ou
// $a = 100;
// $b = 50;
// $a === 100 || $b === 200
//      1     ||     1 = true

// Ou exclusivo só pode um dos comparados ser verdadeiro
// Atenção: muito pouco usado
//      1    xor   1 = false
//      1    xor   0 = true

// and, or (nunca use! salvo exceção)
// $a == 1 and $b == 2 || $c == 3

// Parenteses deixa a priodade
// $a == 1 && ($b == 2 || $c == 3)
