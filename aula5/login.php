<?php

// Validação
// mb_strlen -> mb = multibyte strlen = string length
if ( strlen($_POST['email']) > 30 ) {
    exit('Email inválido');
}

if ( strlen($_POST['senha']) < 8 ) {
    exit('Senha inválida, deve ser maior que 8');
}

echo 'Senha aceita';