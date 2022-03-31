<div class="titulo">Strings</div>

<?php 
    echo(' Avaliando métodos da documentação da string. Qual método que a posição do texto \'abc\' na string \'!AbcaBcabc\' retorne 1?');

    echo strpos('!AbcaBcabc', 'abc') . '<br>';
    echo stripos('!AbcaBcabc', 'abc') . '<br>';
    echo strpos(strtolower('AbcaBcabc'), strtolower('ABC'));

?>

<div class="titulo">Boolean</div>
<?php

    echo TRUE;
    echo '<br>';
    echo FALSE;

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(False);

?>
