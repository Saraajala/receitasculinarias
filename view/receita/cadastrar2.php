<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Cadastrar Receita</title>
</head>

<body>
    <h1>Cadastrar Receita</h1>
    <form method="POST">
        <input type="text" name="nome_receita" placeholder="Nome da Receita" required>
        <textarea name="ingrediente" placeholder="Ingredientes" required></textarea>
        <textarea name="modo_preparo" placeholder="Modo de Preparo" required></textarea>
        <button type="submit">Cadastrar Receita</button>
    </form>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

    if (isset($_POST["nome_receita"]) && isset($_POST["ingrediente"]) && isset($_POST["modo_preparo"])) {
        $receitaController = new ReceitaController($pdo);

        $receitaController->adicionarreceita($_POST["nome_receita"], $_POST["ingrediente"], $_POST["modo_preparo"]);

        // Redireciona para a lista de receitas após o cadastro
        header("Location: receitas.php");
        exit();
    }
    ?>

    <br><br>

    <a href="../../index.php">VOLTAR</a>
</body>

</html>
