<div class="titulo">Desafio Switch</div>

<form action="#" method="post">

    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="metro-km">Metro -> Km</option>
        <option value="km-metro">Km -> Metro</option>
        <option value="celsius-fr">Celsius -> FR</option>
        <option value="fr-celsius">FR -> Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FR = 1.8;

$param = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $diatancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metro";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro = $distancia Km";
        break;
    case 'celsius-fr':
        $conversao = $param * FATOR_CEL_FR;
        $mensagem = "{$param}° Celsius = {$conversao}° Fr";
        break;
    case 'fr-celsius':
        $conversao = $param * FATOR_CEL_FR;
        $mensagem = "{$param}° Fr = {$conversao}° Celsius";
        break;

    default:
        $mensagem = "Nenhum valor calculado";
}
?>