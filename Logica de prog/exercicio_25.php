<?php

$variavelA = readline('Digite o primeiro nuemro: ');
$variavelB = readline('Digite o segundo numero: ');
$variavelC = $variavelA;
$variavelA = $variavelB;
$variavelB = $variavelC;

echo 'O valor de A é: ' . $variavelA . "\n" . 'O Valor de B é: ' . $variavelB;