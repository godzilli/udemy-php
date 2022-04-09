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
                        <h3>Início</h3>
                            <ul>
                                <li><a href="redirecionar.php?dir=desafio&file=desafio_matematica">Desafio</a></li>
                                <li><a href="redirecionar.php?dir=desafio&file=desafio_switch">Desafio Switch</a></li>
                                <li><a href="redirecionar.php?dir=metodos&file=string">Metodos</a></li>
                                <li><a href="redirecionar.php?dir=metodos&file=basicovar">Variaveis</a></li>
                                <li><a href="redirecionar.php?dir=metodos&file=form">Formulário</a></li>
                                <li><a href="redirecionar.php?dir=metodos&file=switch">Desafio Switch</a></li>
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