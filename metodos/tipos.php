<div class="titulo">Declarando Tipos</div>

<?php
function somar1($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1,2) .'<br>';
echo somar1(1.7, 2.5) . '<br>';
function somar2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo '<br>';
echo somar2(1,2) .'<br>';
echo somar2(1.7, 2.5) . '<br>';

function somar3( $a,  $b): int{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}