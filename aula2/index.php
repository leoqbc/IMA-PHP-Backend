<?php

// localhost = 127.0.0.1
// ip local = 127.0.0.1

$nomeCliente = 'Ana Paula';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com HTML</title>
</head>
<body>
    <h1>Olá <span style="color: purple"><?php echo $nomeCliente; ?></span></h1>
    <h2>Esta é uma pagina que está sendo processada pelo PHP</h2>
    <?php echo "<h3>um bloco de HTML aqui!</h3>"; ?>
    <?php echo "<script>alert('javascript dentro do PHP');</script>"; ?>
</body>
</html>