<?php

$matriz = [
    [10,10,10,10,1],
    [10,10,10,10,2],
    [10,10,10,10,3],
    [10,10,10,10,4],
    [10,10,10,10,5]
];

$somaMatriz0 = array_sum($matriz[0]);
$somaMatriz1 = array_sum($matriz[1]);
$somaMatriz1 = array_sum($matriz[2]);
$somaMatriz1 = array_sum($matriz[3]);
$somaMatriz1 = array_sum($matriz[4]);

$somas = [$somaMatriz0, $somaMatriz1, $somaMatriz2, $somaMatriz3, $somaMatriz4];

echo max($somas);