<div class="titulo">Funções</div>

<?php
function imprimirMensagens()
{
    echo "Olá";
    echo "Até mais<br>";
}
imprimirMensagens();

$variavel = 1;
function trocaValor()
{
    $variavel = 2;
    echo "Durante a função trocaValor: $variavel <br>";
}
echo "Antes da função trocaValor: $variavel <br>";
trocaValor();
echo "Depois da função trocaValor: $variavel <br>";

function trocaValorReal(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função trocaValorReal: $variavel <br>";
}

echo "Antes da função trocaValorReal: $variavel <br>";
trocaValorReal();
echo "Depois da função trocaValorReal: $variavel <br>";
?>