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

            <nav class="navegacao">
                <a href="redirecionar.php?dir=funcao&file=links" class="vermelho">Módulos e Links</a>
            </nav>

            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Desafios</h3>
                    <ul>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_for">Desafio For</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_impressao">Desafio Impressão(break/continue)</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_tabela2">Desafio Tabela Matriz</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_tabela">Desafio Tabela</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_palindromo">Desafio Palindromo</a></li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Desafios</h3>
                    <ul>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_matematica">Desafio</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_switch">Desafio Switch</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_mapa">Desafio Mapa</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_meses">Desafio Meses</a></li>
                        <li><a href="redirecionar.php?dir=desafio&file=desafio_sorteio">Desafio Sorteio</a></li>
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