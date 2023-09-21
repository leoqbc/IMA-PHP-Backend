<?php

function soma($valor1, $valor2) {
    return $valor1 + $valor2;
}

function titulo(string $titulo): string {
    return "<h1>$titulo</h1>";
}

// Terceiro parametro leva um valor default, um valor pré definido
// se não adicionarmos o terceiro parametro, ele assumirá a string 'text'
function input(string $nome, string $label, string $type = 'text'): string {
    return "
    <div>
        <label for='$label'>$label</label>
        <input id='$label' type='$type' name='$nome'>
    </div>
    ";
}
