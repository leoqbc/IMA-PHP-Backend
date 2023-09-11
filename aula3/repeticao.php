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