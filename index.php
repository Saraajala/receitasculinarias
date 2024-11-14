<?php


require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/config.php';
require_once 'C:/aluno2/xampp/htdocs/receitasculinarias/controller/ReceitaController.php';

$receitaController = new ReceitaController($pdo);
/*$receitaController->exibirListaReceitas();*/


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aroma & Sabor</title>
</head>

<body>


<header class="fundoindex">
    <h1>Aroma & Sabor</h1>
    <div class="menu">
        <ul>
            <li><a href="../../cadastrar.php">Cadastre-se</a></li>
            <li><a href="../../login.php">Login</a></li>
            <li><a href="blog.php">Blog</a></li>
        </ul>
    </div>
    <h3>Olá e seja bem-vindo! No nosso blog de culinária, você encontra inspirações, receitas e dicas para tornar
        cada refeição especial. Explore e deixe-se levar pelo sabor!
    </h3>
    <div class="btn">
        <a href="sobre.php"><button>Saiba mais</button></a>
    </div>
</header>


    <footer class="rodape2">
            <div>
            <p>© 2024 Sara Ajala e Raissa Cruz. Todos os direitos reservados</p>
            </div>
        </footer>
</body>

</html>