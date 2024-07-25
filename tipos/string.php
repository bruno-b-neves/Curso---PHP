<div class="titulo">Tipo String</div>

<?php
# Strings podem ser por '' ou ""
echo 'E sou uma string';
echo '<br>';

# var_dump retornará o tipo, a quantidade de caracteres e a string
# o var_dump retornou a quantidade de 10 pois o strlen não se da muito bem
# com o padrão UTF-8 então ele também contará qualquer caracter aceito pelo UTF-8.
var_dump("Eu também");
echo '<br>';

// concatenação
# No PHP a concatenação é por .
# O comando echo tamém aceite ()
echo ('Nós também' . ' somos' . '<br>');
# Pode concatenar string com números
echo ('Número é ' . 123);

# Pode separar por , dentro do comando echo, mas também não quer dizer 
# que é um simbolo válido para concatenar string
echo '<br>', "Também aceito", " virgulas";

# Dentro de "" posso utilizar ''
# Ou dentro de '' posso utilizar "" sem problemas
# Posso utilizar '' dentro de '' porém preciso utilizar '\'Teste\'' - Scape
# Posso utilizar "" dentro de "" porém preciso utilizar "\"Teste\"" - Scape
# Se quiser imprimir um \ é só colocar um 2x \ tanto nas "" ou ''
echo "<br>";
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\" . '\\';

# Desde o começo estamos usando o comando echo para imprimir
# Existe outra função usada para imprimir que é a função print()
# print sem () também funciona
print('<br>Também existe a função print');
print '<br>Também existe a função print sem ()';

// Algumas funções da string
# uppercase, lowercase, tamanho da string
echo '<br>' . strtoupper('maximizado'); // uppercase
echo '<br>' . strtolower('MINIMIZADO'); // lowercase
echo '<br>' . ucfirst('só a primeira letra'); // só a primeira letra é maximizado
echo '<br>' . ucwords('todas as palavras'); // cada primeira palavra é maximizado
echo '<br>' . strlen('Quantas letras?'); // calcula o tamanho da string

# mb_strlen — Obtém o comprimento da string
# O parâmetro encoding é a codificação de caracteres. Se for omitido ou null, o valor da codificação de caracteres interna será usado.
echo '<br>' . mb_strlen('Eu também', "utf-8"); 
// substr — Retorna parte de uma string
echo '<br>' . substr('Só uma parte mesmo', 7, 6); 
// Substitui todas as ocorrências da string de pesquisa com a string de substituição
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');


