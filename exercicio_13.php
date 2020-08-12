Entrar com 20 números e imprimir a soma
dos positivos e o total de números negativos

<?php

$numeros = [];

for ($index = 0; $index < 4; $index += 1) {
    $numeros[] = readline('Digite um numero: ');
}

$somaPositivo = 0;
$quantidadeNegativos = 0;

foreach ($numeros as $value) {
    if ($value >= 0) {
        $somaPositivo += $value;
    } else {
        $quantidadeNegativos += 1;
    }
}

echo $somaPositivo . "\n";
echo $quantidadeNegativos;