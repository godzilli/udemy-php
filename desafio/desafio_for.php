<div class="titulo">Desafio For</div>

<?php

$print = '';
for($cont = 1; $cont <= 5; $cont++){
    $print .= '#';
    echo "$print <br>";
}

echo "---------------------------------";

for($print2 = '#'; $print2 != '######'; $print2 .= '#'){ //diferente de 6 # e .= atribui e acrescenta
    echo "$print2 <br>";
}