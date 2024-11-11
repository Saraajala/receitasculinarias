<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>

<h1>Lista de Receitas</h1>

<?php

foreach($receitas as $receita){
    echo "Nome: " . $receita["nome_usuario"] . "<br>";
    echo "E-mail: " . $receita["email"] . "<br>";
    echo "Senha: " . $receita["senha"] . "<br>";
    echo "<br><hr>";
}

?>

<button><a href="view/cadastrar.php">Cadastrar</a></button>

    
</body>
</html>