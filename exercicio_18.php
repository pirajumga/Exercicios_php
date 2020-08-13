Na usina de Angra dos Reis, os técnicos
analisam a perda de massa de um material
radioativo. Sabendo-se que este perde 25%
de sua massa a cada 30 segundos, criar um
algoritmos que imprima o tempo necessário
para que a massa desse material seja menor
que 0.10

<?php

$massaMaterial = readline('Digite Qual a massa do material: ');
$tempo = 0;

while ($massaMaterial > 0.10) {
    $massaMaterial = $massaMaterial * 0.75;
    $tempo += 30;
}

echo 'Levara um total de: ' . $tempo . ' segundos para o material ter menos de 0.10 de massa.';