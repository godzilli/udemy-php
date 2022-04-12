<div class="titulo">Arrays Multidimensionas</div>

<?php
$dados = [
    [
        "nome" => "Jennifer",
        "idade" => 23,
        "naturalidade" => "Paraná"
    ],
    [
        "nome" => "Gabriel",
        "idade" => 21,
        "naturalidade" => "Campo Largo"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Monica",
    "idade" => 41,
    "naturalidade" => "Paraná"
];
echo '<br>';
echo '--------------------------------------------';
echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];
echo '<br>';
echo '--------------------------------------------';
echo '<br>';
$dados[2]["Vizinhos"] = 'Morador do lado';
print_r($dados[2]);
