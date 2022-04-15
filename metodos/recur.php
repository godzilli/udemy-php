<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero)
{
    $soma = 0;
    for (; $numero >= 1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';

function somaRecUmAte($numero)
{
    // Condição de parada
    if ($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecUmAte($numero - 1);
    }
}

echo somaRecUmAte(150) . '<br>';

function somaRecEco($numero)
{
    return $numero === 1 ? 1 : $numero + somaRecEco($numero);
}
echo somaRecUmAte(150) . '<br>';
