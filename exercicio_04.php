Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5

<?php

$numero1 = readline('Digite o primeiro numero: ');
$numero2 = readline('Digite o segundo numero: ');
$soma = $numero1 + $numero2;

if ($soma > 20) {
    echo $soma + 8;
} else {
    echo $soma - 5;
}
