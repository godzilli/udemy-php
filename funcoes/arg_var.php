<div class="titulo">Argumentos Variaveis</div>

<?php
function soma($a, $b)
{
    return $a + $b;
}

echo soma(14, 15) . '<br>';

function somaCompleta(...$numero)
{
    $soma = 0;
    foreach ($numero as $num) {
        $soma += $num; // soma atribuitiva
        //$soma = $soma + $num;
    }
    return $soma;
}
echo somaCompleta(1, 2, 3, 4, 5) . 'teste';

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array); //desmembra o array e joga para outro array

echo '<br>';
echo '----------------------------------------------';
echo '<br>';

function membros($titular, ...$dependentes)
{ //parametro fixo e parametro variavel
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }else{
    echo 'Não possui dependentes.';
    }
}
membros("Jennifer", "Gabriel", "Marcelo");
