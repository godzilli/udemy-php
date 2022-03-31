<div class="titulo">Váriaveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;

echo $soma;
////////////////////
echo '<br>';
echo isset($soma);
unset($soma);
////////////////////
$var = "Agora sou string";
echo '<br>' . $var;


// Nomes de váriaveis https://www.php.net/manual/pt_BR/reserved.variables.php
echo '<br>';
var_dump(($_SERVER));
?>