<?php

// carregando o arquivo reutilizacao.php no arquivo atual
require 'reutilizacao.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?=titulo('Meu formulário')?>
    
    <form action="teste.php">
        <?=input('nome', 'Nome:')?>
        <?=input('email', 'Email:', 'email')?>
        <?=input('telefone', 'Telefone:')?>
        <button>Enviar</button>
    </form>
</body>
</html>