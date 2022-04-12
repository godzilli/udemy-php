<div class="titulo">Laço For</div>

<?php
for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}

$array = ['2°', '3°', '4°', '5°', '6°', 'Sab', 'Dom'];
print_r($array);

echo '<br>';

for ($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo "{$matriz[$i][$j]}";
    }
    echo "<br>";
}
echo "<br>";
