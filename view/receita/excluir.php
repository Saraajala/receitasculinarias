<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Receita</title>
</head>
<body>

    <h1>Excluir Receita</h1>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

    $receitaController = new ReceitaController($pdo);
    $receitas = $receitaController->listarReceitas();

    if (!empty($receitas)) {
        echo "<ul>";
        foreach ($receitas as $receita) {
            echo "<li>";
            echo "<strong>" . $receita['nome_receita'] . "</strong> - ";
            echo "<a href='excluir.php?id=" . $receita['id'] . "'>Excluir</a>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma receita cadastrada.</p>";
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $receitaController->excluirReceita($id);
        
        header("Location: excluir.php");
        exit();
    }
    ?>

    <br><br>
    <a href="receitas.php">Voltar para a lista de receitas</a>

</body>
</html>
