<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Receita</title>
</head>

<body>

    <h1>Atualizar Receita</h1>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $receitaController = new ReceitaController($pdo);

        $receita = $receitaController->listarReceitaPorId($id);

        if ($receita) {
            echo "
            <form method='POST'>
                <input type='text' name='nome_receita' value='" . $receita['nome_receita'] . "' placeholder='Nome da Receita' required>
                <textarea name='ingrediente' placeholder='Ingredientes' required>" . $receita['ingrediente'] . "</textarea>
                <textarea name='modo_preparo' placeholder='Modo de Preparo' required>" . $receita['modo_preparo'] . "</textarea>
                <button type='submit'>Atualizar Receita</button>
            </form>";
        } else {
            echo "<p>Receita não encontrada.</p>";
        }
    } else {
        echo "<p>ID da receita não fornecido.</p>";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
        $nome_receita = $_POST['nome_receita'];
        $ingrediente = $_POST['ingrediente'];
        $modo_preparo = $_POST['modo_preparo'];

        $receitaController->atualizarReceita($_GET['id'], $nome_receita, $ingrediente, $modo_preparo);

        header("Location: listarReceitas.php");
        exit();
    }
    ?>

    <br><br>
    <a href="listarReceitas.php">Voltar para a lista de receitas</a>

</body>

</html>
