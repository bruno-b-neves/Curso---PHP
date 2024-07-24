<div class="titulo">Olá PHP</div>
<h2>Exemplo A</h2>
<?php
    // echo 'Olá '; Isso é uma setença de código e precisa de ;
    // echo '\n'; com aspas simples não é interpretado
    echo "\n"; // no html isso não é interpretado como quebra linha.
    echo 'Olá <br>'; // Por conta da tag <br> a quebra de linha será interpretada.
    echo 'Mundo!';
?>

<h2>Exemplo B</h2>
<?= "Outra forma de me 'expressar'!" ?>

<?php
echo '<br> <br>';
echo $_SERVER['HTTP_USER_AGENT'];
phpinfo();