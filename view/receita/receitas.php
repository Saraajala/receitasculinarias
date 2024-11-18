<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Minhas Receitas</title>
</head>

<body>
    <h1>Minhas Receitas</h1>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

    $receitaController = new ReceitaController($pdo);
    $receitas = $receitaController->listarReceitas();

    if (!empty($receitas)) {
        foreach ($receitas as $receita) {
            echo "<h2>" . $receita['nome_receita'] . "</h2>";
            echo "<p><strong>Ingredientes:</strong><br>" . $receita['ingrediente'] . "</p>";
            echo "<p><strong>Modo de Preparo:</strong><br>" . $receita['modo_preparo'] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>Nenhuma receita cadastrada.</p>";
    }

    ?>

    <br><br>

    <a href="cadastrar2.php">Cadastrar Nova Receita +</a>
    <br><br>
    <a href="../../blog.php">Voltar</a>
</body>

</html>