Criar um algoritmo com uma matriz 5x5 e
imprima: toda a matriz, a matriz gerada só
com números ímpares e outra só com
números pares

<?php

$matriz = [
    0 => [1,2,3,4,5],
    1 => [6,7,8,9,10],
    2 => [11,12,13,14,15],
    3 => [16,17,18,19,20],
    4 => [21,22,23,24,25]
];

$matrizPar = [];
$matrizImpar = [];

foreach ($matriz as $value) {
    echo implode(',', $value) . "\n";
}

foreach ($matriz as $value) {
    foreach ($value as $numeros) {
        if ($numeros % 2 == 0) {
            $matrizPar[] = $numeros;
        }
    }
    }

foreach ($matriz as $value) {
    foreach ($value as $numeros) {
        if ($numeros % 2 != 0) {
            $matrizImpar[] = $numeros;
        }
    }
}

echo 'A Matriz com apenas numeros pares é: ' . implode(',', $matrizPar) . "\n";
echo 'A Matriz com apenas numeros impares é: ' . implode(',', $matrizImpar);




