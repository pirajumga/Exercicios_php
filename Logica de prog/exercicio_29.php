<?php

$numero1 = (int) readline('Digite um numero: ');
$numero2 = (int) readline('Digite um numero: ');
$numero3 = (int) readline('Digite um numero: ');

function maior3($numero1, $numero2, $numero3) {
    return max([$numero1, $numero2, $numero3]);
    }


echo maior3($numero1, $numero2, $numero3);
