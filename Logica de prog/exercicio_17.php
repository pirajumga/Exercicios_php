Chico tem 1,50m e cresce 2 centímetros por
ano, enquanto Juca tem 1,10m e cresce 3
centímetros por ano. Construir um algoritmos
que calcule e imprima quantos anos serão
necessários para que Juca seja maior que
Chico

<?php

$chico = 150;
$juca = 110;
$anos = 0;

while ($chico >= $juca) {
    $chico += 2;
    $juca += 3;
    $anos += 1;
}

echo 'Sera necessario ' . $anos . ' anos para que Juca seja maior que chico.';
