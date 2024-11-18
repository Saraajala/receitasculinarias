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
                <li><a href="blog.php">Blog</a></li>
                <li><a href="index.php">Sair</a></li>
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
            <li><a href="categorias/bolos.php">Bolos</a></li>
            <li><a href="categorias/cookies.php">Cookies</a></li>
            <li><a href="categorias/doces_saudaveis.php">Doces Saudáveis</a></li>
            <li><a href="categorias/doces_natal.php">Doces de Natal</a></li>
            <li><a href="categorias/massas.php">Massas</a></li>
            <li><a href="categorias/asiatica.php">Culinária Asiática</a></li>
            <li><a href="categorias/saudavel.php">Receitas Saudáveis</a></li>
            <li><a href="categorias/natal.php">Receitas de Natal</a></li>
            <li><a href="categorias/drinks_alcool.php">Drinks com Álcool</a></li>
            <li><a href="categorias/drinks_sem_alcool.php">Drinks sem Álcool</a></li>
        </ul>
    </nav>

    <!-- Seção de Receitas Recentes -->
    <section class="receitas-recentes">
        <h2>Receitas Recentes</h2>
        <div class="lista-receitas">

            <article class="receita">
                <h3>Bolo de Chocolate</h3>
                <img class="img-receita" src="img/imgbolo/bolochocolate.jpg">
                <p>Bolo macio com cobertura de brigadeiro</p>
                <a href="receitasescritas/bolochocolate.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Cookies e Mel</h3>
                <img class="img-receita" src="img/doces saudaveis/cookies e mel.png">
                <p>Cookies saudáveis, macios e deliciosos</p>
                <a href="receitasescritas/cookiesemel.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Curry Tailandês</h3>
                <img class="img-receita" src="img/img culinaria asiatica/curry tailandes.png">
                <p>Uma mistura de sabores e especiarias única</p>
                <a href="receitasescritas/currytailandes.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Lasanha</h3>
                <img class="img-receita" src="img/img massas/lasanha.jpg">
                <p>Lasanha típica italiana</p>
                <a href="receitasescritas/lasanha.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Beringela a parmediana</h3>
                <img class="img-receita" src="img/receitas saudáveis/beringela a parmegiana.webp">
                <p>Beringela assada ao molho parmediana</p>
                <a href="receitasescritas/beringelaparmediana.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Quiche</h3>
                <img class="img-receita" src="img/img massas/quiche.jpg">
                <p>torta aberta feita com recheio à base de ovos e creme de leite</p>
                <a href="receitasescritas/quiche.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Cookies and Creem</h3>
                <img class="img-receita2" src="img/img cookies/cookies and cream.jpg">
                <p>Cookies macios com creme a base de manteiga</p>
                <a href="receitasescritas/cokiescreem.php" class="ver-mais">Ver mais</a>
            </article>

            <article class="receita">
                <h3>Chá Gelado de Pêssego</h3>
                <img class="img-receita" src="img/drinks sem alcool/cha gelado de pessego.webp">
                <p>Chá com cubos de gelo sabor pêssego</p>
                <a href="receitasescritas/chageladopessego.php" class="ver-mais">Ver mais</a>
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