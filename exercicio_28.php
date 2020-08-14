<?php

$numero1 = (int) readline('Digite um numero: ');
$numero2 = (int) readline('Digite um numero: ');

function maior2($numero1, $numero2) {
    if ($numero1 > $numero2) {
        return $numero1;
    } else {
        return $numero2;
    }
}

echo maior2($numero1, $numero2);
