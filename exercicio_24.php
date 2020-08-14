<?php

$numero1 = (int) readline('Valor 1: ');
$operacao = readline('Operaração: ');
$numero2 = (int) readline('Valor 2: ');

if ($operacao === '+') {
    echo $numero1 . ' + ' . $numero2 . ' = ' . ($numero1 + $numero2);
} else if ($operacao === '-') {
    echo $numero1 . ' - ' . $numero2 . ' = ' . ($numero1 - $numero2);
} else if ($operacao === '*') {
    echo $numero1 . ' * ' . $numero2 . ' = ' . ($numero1 * $numero2);
} else if ($operacao === '/') {
    echo $numero1 . ' / ' . $numero2 . ' = ' . ($numero1 / $numero2);
} else {
    echo 'Opçao Invalida';
}