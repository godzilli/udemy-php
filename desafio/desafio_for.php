<div class="modulo verde">
    <h3>Desafio For</h3>
    <?php

    $print = '';
    for ($cont = 1; $cont <= 5; $cont++) {
        $print .= '#';

        echo "$print<br>";
    }

    echo "---------------------------------";
    echo '<br>';

    for ($print2 = '#'; $print2 != '######'; $print2 .= '#') { //diferente de 6 # e .= atribui e acrescenta
        echo "$print2 <br>";
    }
    ?>
</div>