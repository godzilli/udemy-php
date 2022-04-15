<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1; //pegar o ultimo indice para percorrer toda a palavra
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice = $i]) { //, diferente. testa e primeira e ultima letra, segunda e penultima, etc
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . '<br>';
echo palindromo('abccba') . '<br>';
echo palindromo('bola') . '<br>';

function palindromoSimples($palavra)
{
    return $palavra === strrev($palavra) ? 'Sim' : 'Não'; //inverte a palavra e teste se é igual a palavra normal
}
echo palindromo('arara') . '<br>';
echo palindromo('abccba') . '<br>';
echo palindromo('bola') . '<br>';
