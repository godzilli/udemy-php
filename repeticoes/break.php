<div class="titulo">Break e Continue</div>

<?php
$cont = 16;
for(;;) { //infinito
    echo "$cont <br>";
    $cont++;
    if ($cont > 20) {
        break;
    }
}
echo "------------------------------------------------------";
echo '<br>';

echo "Mostrando apenas os pares, no laço de repetição com CONTINUE até chegar no 30 (definido no código): <br>";

for(;;) { // printar apenas os pares
    $cont++;
    if ($cont % 2 === 1) //resto da divisão for 1, então é impar
        continue; //impares
    echo "$cont <br>"; //pares

    if ($cont >= 30) {
        break;
    }
}

echo "------------------------------------------------------";
echo '<br>';

foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break; //estritamente igual a 5
    if($valor % 2 === 0) continue; //divisao de 2 igaul a 0, quer dizer que é par
    echo "$valor <br>";

}

echo "Fim!";
