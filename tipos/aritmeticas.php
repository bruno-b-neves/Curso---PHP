<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';

# Seguir a precedencias da matemática
echo 1 + 2.5, '<br>'; // será float
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';

# mesmo não tendo nenhum float na divisão ele gerará um valor float
echo intdiv(7, 4), '<br>'; // retorna um inteiro da divisão
echo round(7 / 4), '<br>'; // para arrendodar por um inteiro
echo 7 % 4, '<br>'; // resto da divisão (módulo da divisão)
echo 7 % 2, '<br>'; // resto da divisão (módulo da divisão)
echo 8 % 2, '<br>'; // resto da divisão (módulo da divisão)
// echo 7 / 0, '<br>'; // será infinito
// echo intdiv(7, 0); #erro
echo 4 ** 2, '<br>'; // calcula a exponenciação

// Precedência dos operadores:
# 1º - () = Parenteses
# 2º - ** = Exponenciação
# 3º - /, *, % = Divisão, Multiplicação e Resto
# 4º - + e - = Soma e Divisão

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>'; // 14
echo (2 + 3) * 4, '<br>'; // 20
echo 2 + 3 * 4 ** 2, '<br>'; // 50
echo ((2 + 3) * 4) ** 2, '<br>'; // 400