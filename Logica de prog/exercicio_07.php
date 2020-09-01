Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes)

<?php

$numeros = [];

for ($index = 0; $index < 3; $index += 1) {
    $numeros[] = readline('Digite um Numero: ');
}

arsort($numeros);
echo implode(", ", $numeros);