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
    echo "Nome da receita: " . $receita["nome_receita"] . "<br>";
    echo "Ingredientes: " . $receita["ingrediente"] . "<br>";
    echo "Modo de Preparo: " . $receita["modo_preparo"] . "<br>";
    echo "<br><hr>";
}

?>

<button><a href="view/cadastrar.php">Nova receita</a></button>

    
</body>
</html>