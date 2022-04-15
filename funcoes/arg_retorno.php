<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem()
{
    return 'Seja bem vindo!';
    //return deixa usar o resultado da função em qualquer outro lugar do codigo
}

obterMensagem();
$m = obterMensagem();

echo $m;

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Gabriel');
echo '<br>', obterMensagemComNome('Jennifer');

function soma($a, $b){
    return $a +$b;
}
$x = 4;
$y = 5;

echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}
echo '<br>';
echo '----------------------------------------------';

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

echo '<br>';
echo '----------------------------------------------';

function trocaValordeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValordeVerdade($variavel, 5000);
echo '<br>', $variavel;