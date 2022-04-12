<div class="titulo">Constantes</div>

<?php
const FRUTAS = array('laranjas', 'abacaxi');
const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];

define('CIDADES', array('Curitiba', 'Recife'));

echo '<br>' . CIDADES[0];
echo '<br>' . CIDADES[1];
echo '<br>';
echo '----------------------------------------';
echo '<br>';
echo "Impossível mexer em uma constante!";