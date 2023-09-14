<?php

/**
 * Desafio da Aula 02
 * Seguindo a array de nomes abaixo apresente os nomes na caixa de SelectBox
 * já criada
 */
$alunas = [
    'Carla',
    'Amanda',
    'Luciana',
    'Mariana',
    'Mara',
    'Laís'
];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando uma lista de clientes</title>
</head>
<body>
    
    <h1>Lista de alunas</h1>

    <!-- caixa selectBox -->
    <select>
        <?php
        
            foreach ($alunas as $aluna) {
                echo "<option>$aluna</option>";
            }

        ?>
    </select>
</body>
</html>