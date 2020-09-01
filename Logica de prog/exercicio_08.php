Ler 3 números, os possíveis lados de um
triângulo, e imprimir a classificação de
acordo com tamanho dos lados

<?php

$numero1 = readline('Digite o primeiro numero: ');
$numero2 = readline('Digite o segundo numero: ');
$numero3 = readline('Digite o terceiro numero: ');

if ($numero1 == $numero2 && $numero2 == $numero3) {
    echo 'Esses valores formam um triangulo equilátero.';
} else if ($numero1 == $numero2 || $numero2 == $numero3 || $numero1 = $numero3) {
    echo 'Esses valores formam um triangulo isósceles.';
} else {
    echo 'Esses valores formam um triangulo escaleno.';
}

