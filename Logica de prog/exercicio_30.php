<?php

$numero = (int) readline('Digite um numero: ');

function eImpar($numero) {
    return ($numero % 2 != 0);
}

var_dump(eImpar($numero));