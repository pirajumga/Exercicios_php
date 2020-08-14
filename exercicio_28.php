<?php

$numero1 = (int) readline('Digite um numero: ');
$numero2 = (int) readline('Digite um numero: ');

function maior2($numero1, $numero2) {
    return max([$numero1, $numero2]);
}

echo maior2($numero1, $numero2);
