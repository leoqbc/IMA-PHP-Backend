<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus Dados</title>
</head>
<body>
    
    <h1>Confirme seus dados</h1>

    <div>
        <strong>Nome:</strong> <?=$_POST['nome_cliente']?>
    </div>
    <div>
        <strong>Email:</strong> <?=$_POST['email_cliente']?>
    </div>
    <div>
        <strong>Telefone:</strong> <?=$_POST['telefone_cliente']?>
    </div>
    <div>
        <strong>Gênero:</strong> <?=ucfirst($_POST['genero_cliente'])?>
    </div>

</body>
</html>