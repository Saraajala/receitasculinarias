<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>

<body>
    <header class="blog">
        <div class="menu">
            <h1><a href="index.php">Aroma & Sabor</a></h1>
            <ul>
                <li><a href="view/usuario/cadastrar.php">Cadastre-se</a></li>
                <li><a href="view/usuario/login.php">Login</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </div>
        <section class="container2">
            <img class="imgcont" src="img/receita-torta-de-amora.jpg" alt="Imagem de uma torta de amora">
            <h2 class="descricao">Seja bem-vindo ao nosso blog! Aqui você pode compartilhar receitas, encontrar amigos e muito mais. Comece a postar agora!!!</h2>
        </section>
    </header>

    <!-- Menu de Categorias -->
    <nav class="categorias">
        <ul>
            <li><a href="bolos.php">Bolos</a></li>
            <li><a href="cookies.php">Cookies</a></li>
            <li><a href="doces-saudaveis.php">Doces Saudáveis</a></li>
            <li><a href="doces-natal.php">Doces de Natal</a></li>
            <li><a href="massas.php">Massas</a></li>
            <li><a href="culinaria-asiatica.php">Culinária Asiática</a></li>
            <li><a href="receitas-saudaveis.php">Receitas Saudáveis</a></li>
            <li><a href="receitas-natal.php">Receitas de Natal</a></li>
            <li><a href="drinks-alcool.php">Drinks com Álcool</a></li>
            <li><a href="drinks-sem-alcool.php">Drinks sem Álcool</a></li>
        </ul>
    </nav>

    <!-- Seção de Receitas Recentes -->
    <section class="receitas-recentes">
        <h2>Receitas Recentes</h2>
        <div class="lista-receitas">
            
            <article class="receita">
                <h3>Título da Receita 1</h3>
                <p>Descrição breve da receita 1...</p>
                <a href="receita1.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Título da Receita 2</h3>
                <p>Descrição breve da receita 2...</p>
                <a href="receita2.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Título da Receita 3</h3>
                <p>Descrição breve da receita 3...</p>
                <a href="receita3.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Título da Receita 4</h3>
                <p>Descrição breve da receita 4...</p>
                <a href="receita3.php" class="ver-mais">Ver mais</a>
            </article>

        </div>
    </section>

    <footer class="rodape2">
        <div>
            <p>© 2024 Sara Ajala e Raissa Cruz. Todos os direitos reservados</p>
        </div>
    </footer>


</body>

</html>