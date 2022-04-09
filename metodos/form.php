<div class="titulo">Formulário do Desafio</div>
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Salvar</button>
</form>

<?php

if (isset($_POST['t1']) && isset($_POST['t1'])) { 
//isset = se t1 e t2 esta com valor NÃO sendo 0, 
//iver com 0 pode retornar false
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = '50';
    } elseif ($t1 xor $t2) {
        $tv = '32';
    }
    if ($t1 or $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Tv!";
    } else {
        $resultado = "Sem Tv.";
    }

    $saudavel = !$sorvete;

    if (!$sorvete) {
        $resultado .= '<br>Sem sorvete';
    } else {
        $resultado .= '<br>Sorvete!';
    }

    echo "<p>$resultado</p>";
}
?>