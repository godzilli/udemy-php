<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "azul",
    "peso" => 48.50
);

print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f"
);

echo '<br>';
print_r($lista);
$lista[] = 'i';
print_r($lista);
$lista [false] = "vai entrar no lugar do 0";
$lista[true] = "entra no 1";

?>