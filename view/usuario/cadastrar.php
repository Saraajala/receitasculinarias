<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>

<body>
    <h1>Cadastrar Usuário</h1>
    <form method="POST">
        <input type="text" name="nome_usuario" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="senha" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
    require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

    if (isset($_POST["nome_usuario"]) && isset($_POST["email"]) && isset($_POST["senha"])){
        $participanteController = new ParticipanteController($pdo);

        $participanteController->criarParticipante($_POST["nome_usuario"], $_POST["idade"], $_POST["data"], $_POST["hora"], $_POST["acompanhante"]);

        header("location: ../index.php");
    }
    ?>

    <br><br>

<a href="../index.php">VOLTAR</a>
</body>

</html>