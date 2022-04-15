<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)' , $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');
echo "<br>";

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida";
    echo "<br>";
    echo "Para beber: $bebida";
    echo "<br>";
    echo "---------------------------------------------";
}
anotarPedido('Hamburguer');
echo "<br>";

anotarPedido('Pizza', 'Refrigerante');
echo "<br>";

function anotarPedido2($bebida = 'Água', $comida ){
    echo "Para comer: $comida";
    echo "<br>";
    echo "Para beber: $bebida";
}
anotarPedido2('Refrigerante', 'Pizza');