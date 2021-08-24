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
                                <li><a href="ex.php?dir=hello.php">Atividade A</a></li><!--links-->
                                <li><a href="#">Atividade B</a></li>
                                <li><a href="#">Atividade C</a></li>
                                
                            </ul>
                    </div>

                    <div class="modulo vermelho"> <!--link que redireciona para a atividade-->
                        <h3>Módulos 02</h3>
                            <ul>
                                <li><a href="#">Atividade A</a></li><!--links-->
                                <li><a href="#">atividade B</a></li>
                                <li><a href="#">atividade C</a></li>
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