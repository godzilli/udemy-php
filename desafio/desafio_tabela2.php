<div class="titulo">Desafio Tabela Matriz</div>

<form action="#" method="post">
    <div>
        <label for="linha">linha</label>
        <input type="numero" value=<?= $_POST['linha'] ?? 10 ?> name="linha" id="linha">
    </div>
    <div>
        <label for="coluna">coluna</label>
        <input type="numero" value=<?= $_POST['coluna'] ?? 10 ?> name="coluna" id="coluna">
    </div>
    <button>
        Gerar Matriz
    </button>
</form>

<style>
    form * {
        font-size: 1.8rem;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>

<?php

$linha = intval($_POST['linha']);
$coluna = intval($_POST['coluna']);

if(!$linha) $linha = 10; /* se Sem linha, assume o valor padrão 10 */
if(!$coluna) $coluna = 10; /* se Sem coluna, assume o valor padrão 10 */

for ($i = 0; $i < $linha; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $coluna; $j++) {
        echo "<td> $i </td>";
        $i++;
    }
    echo "</tr>";
}

?>