<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jennifer",
    "idade" => 23
];

$dados2 = [
    "naturalidade" => "Curitiba"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); //será True, então resulta em 1 pois possui dados
echo '<br>' . count($dadosCompletos); //conta no array

echo '<br>';
$indice = array_rand($dadosCompletos); //seleciona randomicamente
echo '<br>';
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";
echo '<br>';
//unset($dadosCompletos["nome"]); //apaga dados do array
echo '<br>';
print_r($dadosCompletos);
echo '<br>';
echo '--------------------------------------------';
echo '<br>';

$impares = [1,3,5,7];
$pares = [2,4,6,8];

$decimais = $pares + $impares;
print_r($decimais);

echo '<br>';
$decimais = array_merge($pares, $impares);

echo '<br>';
sort($decimais);
print_r($decimais);

?>