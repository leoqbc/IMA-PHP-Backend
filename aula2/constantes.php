<?php

// Constante - 1 vez definida nunca mais muda (na execução)
define('NOME_PROJETO', 'IMA - Todas');
define('COR_PRETO', '#000000');
define('PI', 3.1415926);

// é um constante, sempre que tiver sem '$' trata-se de uma constante
echo NOME_PROJETO;
echo "\n";
echo PHP_VERSION;

// echo NOME_PROJETO . "\n" . PHP_VERSION;

// não é possível: NOME_PROJETO = 123;

$rotacao = 360 * PI;

// sem constante
// $rotacao180 = 180 * 3.1415926;