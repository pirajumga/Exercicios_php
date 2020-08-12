Criar um algoritmos que imprima a tabuada
de um número

<?php

$numero = readline('Digite um numero: ');

for ($index = 1; $index < 11; $index += 1) {
    echo $numero . 'X' . $index . ' = ' . ($numero * $index) . "\n";
}