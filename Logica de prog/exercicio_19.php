Armazenar 15 números inteiros em um vetor
e imprimir uma mensagem contendo o
número e uma das mensagens: par ou ímpar

<?php

$numero = [];

for ($index = 0; $index < 5; $index += 1) {
    $numero[$index] = readline('Digite um numero: ');
}

foreach ($numero as $value) {
    echo $value . ' é ' . ($value % 2 == 0 ? 'Par' : 'Impar') . "\n";
}