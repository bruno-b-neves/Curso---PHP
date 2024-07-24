<div class="titulo">Tipo Inteiro</div>

<?php
echo 11; # isso é um inteiro
echo '<br>';

var_dump(11); # var_dump da algumas informações inclusive o tipo da variavel
echo '<br>';

# mostra algumas constantes que estão dentro do PHP,
# esse mostra a quantidade min e max de inteiros suportados pela minha máquina
echo PHP_INT_MAX, '<br>';
echo PHP_INT_MIN,'<br>';

# É possível representar os números inteiros de outras bases
echo 017, '<br>'; // base octal
echo 0b11000111001,'<br>'; // base binária
echo 0x117acf0,'<br>'; // base hexadecimal


