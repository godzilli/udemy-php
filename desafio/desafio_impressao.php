<div class="titulo">Desafio Impressão</div>

<?php
echo "Imprimir apenas o valores do array que contém indice par, resolvendo com for e foreach.
    <br>Esperando: AAA, CCC, EEE:";

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

echo "<br>";
echo "--------------------------------------------";
echo "<br>";

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 1) continue;
    echo "{$array[$i]} <br";
}

foreach ($array as $chave => $valor) {
    if ($chave % 2 !== 0) continue;
    echo "$valor <br>";
}
