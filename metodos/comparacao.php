<div class="titulo">Comparação</div>

<?php

$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];

var_dump($arr1 == $arr2); //true
var_dump($arr1 === $arr2); //true pq são iguais

$arr3 = ['idade' => 20, 'nome' => 'Maria']; //ordem diferentes mas valores iguais

echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 == $arr3); //false pq a ordem é diferente. Comparação restrita
var_dump($arr1 != $arr3); //false por serem iguais idenpendente da ordem
var_dump($arr1 !== $arr3); //true pq são diferentes na ordem

$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); //
var_dump($arr1 === $arr4); //comparação restrita com tipos diferentes, int e string