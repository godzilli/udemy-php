    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Local de estudo PHP</title>
    </head>
    <body>
        
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Início</h2>
        </header>

        <main class="principal">
            <div class="conteudo">
                <nav class="modulos"> <!-- navegação-->
                    <div class="modulo verde"> <!--link que redireciona para a atividade-->
                        <h3>Módulos 01</h3>
                            <ul>
                                <li><a href="redirecionar.php?dir=basic&file=oi">Texto Redirecionado</a></li><!--links-->
                                <li><a href="redirecionar.php?dir=basic&file=desafio">Desafio</a></li>
                                <li><a href="redirecionar.php?dir=tipos&file=string">Tipos</a></li>
                                <li><a href="redirecionar.php?dir=variavel&file=basicovar">Variaveis</a></li>
                                <li><a href="redirecionar.php?dir=variavel&file=desafiovar">Desafio Váriavel</a></li>
                                <li><a href="redirecionar.php?dir=metodos&file=form">Formulário</a></li>
                                <li><a href="redirecionar.php?dir=metodos&file=switch">Switch/Case</a></li>
                            </ul>
                    </div>
                </nav>
            </div>
        </main>

        <footer class="rodape">
            Jennifer Zilli - jenniferdacostazilli@hotmail.com <?= date('M-D-Y') ?>
        </footer>

    <!--
        comentario
    -->
    </body>
    </html>