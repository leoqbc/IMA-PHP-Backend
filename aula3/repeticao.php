<?php

$contador = 1;
// Loop while você precisa controla-lo
// precisa de um contador > uma ação de incrementar
while($contador <= 30) {
    echo "<div>$contador</div>";
    $contador++;
}

// do {
// } while();

echo '<br>';

// for(contado; condição; passo) { ... }
for ($cont = 10; $cont >= 1; $cont--) {
    echo $cont . '<br>';
}

// isso gera um loop infinito
// for ($cont = 1; $cont <= 10;) {
// }

for ($cont = 1; $cont <= 10; $cont++) {

}

// unicamente feito para andar sobre array!
// loop sobre cada um dos elementos dentro de um array
// array() | formato novo
$nomes = ['Leonardo', 'Eveline', 'Karine', 'Polyanna'];

// por demanda adiciona novo nomes
$nomes[] = 'Emily';
$nomes[] = 'Grazielly';

// javascript nome.push('');

$nomes[10] = 'Janine';

echo '<br>';

foreach ($nomes as $nome) {
    echo "<div>Olá $nome</div>";
}