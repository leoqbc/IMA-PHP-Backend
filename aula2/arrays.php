<?php

// Estrutura de dados
$aluna1 = 'Ana Paula';
$aluna2 = 'Karine';
$aluna3 = 'Helaine';

// array() antigo, modo novo []
// começa pela casa 0
$alunas = ['Ana Paula', 'Karine', 'Helaine'];

// echo $alunas[2];

// definição em array de chave => valor 
$cliente = [
    "nome" => 'Ana Paula',
    "email" => 'ana@mail.com',
    "idade" => '20 anos',
    "ativa" => true
];

echo "\n";
// echo $cliente['nome'];

// comando de exibir arrays
// print_r($cliente);

// um loop que percorre pelos nomes das alunas
foreach ($alunas as $aluna) {
    echo $aluna . "\n";
}
