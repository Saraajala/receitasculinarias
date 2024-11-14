<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Login</title>
</head>

<body>
    <header class="fundoindex">

        <div class="menu">
            <h1><a href="../../index.php">Aroma & Sabor</a></h1>
            <ul>
                <li><a href="cadastrar.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="../../blog.php">Blog</a></li>
            </ul>
        </div>

        <br><br><br><br><br><br><br>

        <h3>Login
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form></h3>

        <?php
        require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
        require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

        if (isset($_POST["email"]) && isset($_POST["senha"])) {
            $receitaController = new ReceitaController($pdo);

            $receitaController->login($_POST["email"], $_POST["senha"]);

            header("Location: ../../blog.php");
        }
        ?>

        <div class="btn">
            <a href="cadastrar.php"><button>Ainda não está cadastrado?</button></a>
        </div>

    </header>

    <footer class="rodape2">
        <div>
            <p>© 2024 Sara Ajala e Raissa Cruz. Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>