Criar um vetor com 20 elementos inteiros.
Imprimir o maior e o menor, sem ordenar, o
percentual de números pare e média dos
elementos do vetor

<?php

$numero = [];
$percentual = 0;
$mediaDosElementos = 0;

for ($index = 0; $index < 20; $index += 1) {
    $numero[$index] = readline('Digite um Numero: ');
}

foreach ($numero as $value) {
    if ($value % 2 == 0) {
        $percentual += 1;
    }
    $mediaDosElementos += $value;
}

echo 'O Maior numero é: ' . max($numero) . " " . 'e o menor numero é: ' . min($numero) . "\n";
echo 'O percentual de Numeros pares é de: ' . ($percentual / 6) * 100 . '% ' . "\n";
echo 'A media dos elementos do vetor é: ' . $mediaDosElementos / 20;

