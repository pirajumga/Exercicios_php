Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número

<?php

$numero = readline('Digite um numero de 1 a 12: ');

$meses =[
    '1' => 'Janeiro',
    '2' => 'Fevereiro',
    '3' => 'Março',
    '4' => 'Abril',
    '5' => 'Maio',
    '6' => 'Junho',
    '7' => 'Julho',
    '8' => 'Agosto',
    '9' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
];

if ($numero > 0 && $numero < 13) {
    echo $meses[$numero];
} else {
    echo 'Este numero não é compativel com um mes.';
}
