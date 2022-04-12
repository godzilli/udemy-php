<div class="titulo">Post</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="PR">Paraná</option>
        <option value="SP">São Paulo</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size:  1.8rem;
    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>';
echo '-------------------------------------';
echo '<br>';
echo "GET e POST são arrays";

?>