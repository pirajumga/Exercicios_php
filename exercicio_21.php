Criar 2 vetores com 10 números inteiros
cada. Gerar e imprimir um vetor dos números
não comuns aos e vetores

<?php

$vetor1 = [];
$vetor2 = [];

for ($index = 0; $index < 10; $index += 1) {
    $vetor1[$index] = readline('Digite um numero: ');
}

for ($index = 0; $index < 10; $index += 1) {
    $vetor2[$index] = readline('Digite um numero: ');
}

$resultado1 = array_diff($vetor1, $vetor2);
$resultado2 = array_diff($vetor2, $vetor1);

$total = array_merge($resultado1, $resultado2);

echo 'Os valores diferentes dos vetores são: ' . implode ( ', ', $total) . '.';