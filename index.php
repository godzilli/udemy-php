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
                <nav class="modulos">
                    <!-- navegação-->
                    <div class="modulo verde">
                        <!--link que redireciona para a atividade-->
                        <h3>1</h3>
                        <ul>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_matematica">Desafio</a></li>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_switch">Desafio Switch</a></li>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_mapa">Desafio Mapa</a></li>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_meses">Desafio Meses</a></li>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_sorteio">Desafio Sorteio</a></li>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_for">Desafio For</a></li>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_impressao">Desafio Impressão(break/continue)</a></li>
                            <li><a href="redirecionar.php?dir=desafio&file=desafio_tabela">Desafio Tabela</a></li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <!--link que redireciona para a atividade-->
                        <h3>2</h3>
                        <ul>
                            <li><a href="redirecionar.php?dir=metodos&file=form">Formulário</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=string">Metodos</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=basicovar">Variaveis</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=operacoes">Operações</a></li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <!--link que redireciona para a atividade-->
                        <h3>3</h3>
                        <ul>
                            <li><a href="redirecionar.php?dir=metodos&file=constantes">Constantes</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=switch">Switch</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=array">Array</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=mapa">Mapas de Array</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=multi">Array Multidimensionas</a></li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <!--link que redireciona para a atividade-->
                        <h3>4</h3>
                        <ul>
                            <li><a href="redirecionar.php?dir=metodos&file=post">Post</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=get">Get</a></li>
                            <li><a href="redirecionar.php?dir=metodos&file=comparacao">Comparação</a></li>
                        </ul>
                    </div>
                    <div class="modulo verde1">
                        <!--link que redireciona para a atividade-->
                        <h3>5</h3>
                        <ul>
                            <li><a href="redirecionar.php?dir=repeticoes&file=for">For</a></li>
                            <li><a href="redirecionar.php?dir=repeticoes&file=foreach">Foreach</a></li>
                            <li><a href="redirecionar.php?dir=repeticoes&file=break">Break</a></li>
                            <li><a href="redirecionar.php?dir=repeticoes&file=while">While/Do While</a></li>

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