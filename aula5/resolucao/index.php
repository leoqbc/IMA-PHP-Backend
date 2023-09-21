<?php
/*
    Crie um formulário de cadastramento de cliente para exibir na tela seguinte os dados:

    1. Nome
    2. Email
    3. Telefone
    4. Genero (radiobox ou select)

    Criar um arquivo chamado exibe_cliente.php ao confirmar o cadastro você deve redirecionar a pessoa para a página
    e exibir seu dados.
*/

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
</head>
<body>
    <h1>Formulário de cadastro</h1>
    <form action="exibe_cliente.php" method="POST">
        <div>
            <label for="nome_cliente">Nome: </label>
            <input type="text" id="nome_cliente" name="nome_cliente" required>
        </div>
        <div>
            <label for="email_cliente">Email: </label>
            <input type="email" id="email_cliente" name="email_cliente" required>
        </div>
        <div>
            <label for="telefone_cliente">Telefone: </label>
            <input type="text" id="telefone_cliente" name="telefone_cliente" required>
        </div>
        <div>
            <div>Genero: </div>
            <div>
                <input type="radio" id="feminino" name="genero_cliente" value="feminino" required>
                <label for="feminino">Feminino</label>
            </div>
            <div>
                <input type="radio" id="masculino" name="genero_cliente" value="masculino">
                <label for="masculino">Masculino</label>
            </div>
            <div>
                <input type="radio" id="outros" name="genero_cliente" value="outros">
                <label for="outros">Outros</label>
            </div>
        </div>
        <button>Cadastrar</button>
    </form>
</body>
</html>