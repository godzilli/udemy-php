<div class="titulo">Closure & Callbe</div>

<?php

$soma1 = function($a, $b){
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
}

echo $soma1(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não' . '<br>');

echo '<br>';

function executar2($a, $b, $op, Closure $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar2(100, 100, '+', $soma1); //é executada por usar uma função que esta sendo usada pelo Closure, a classe
//executar(500, 900, '+', soma1); aqui não sera executada com Closure