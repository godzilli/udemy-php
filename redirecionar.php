<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/ex.css">
    <title>Exercicio</title>
</head>

<body class="ex">

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Atividade</h2>
    </header>

    <nav class="navegacao">
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">

            <?php 
                include($_GET['dir'] . '/' . $_GET['file'] . '.php');
            ?>

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