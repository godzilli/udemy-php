<div class="titulo">Foreach</div>

<?php

$array = ['2°', '3°', '4°', '5°', '6°', 'Sab', 'Dom'];

foreach ($array as $valor){
    echo "$valor <br>";
}

foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}