Criar um algoritmo com uma matriz 5x5 e
escreva os elementos da diagonal principal

<?php

$matriz = [
    0 => [1,2,3,4,5],
    1 => [6,7,8,9,10],
    2 => [11,12,13,14,15],
    3 => [16,17,18,19,20],
    4 => [21,22,23,24,25]
];

echo 'Os valores da matriz principal são: ' ;

for ($index = 0; $index < 5; $index += 1) {
    echo $matriz[$index][$index] . ', ';
}