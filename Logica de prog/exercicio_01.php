Escreva um algoritmo para ler o número total de eleitores de um município, o número de votos
brancos, nulos e válidos. Calcular e escrever o percentual que cada um representa em relação ao total
de eleitores.
<?php

$totalEleitores = readline('Total de Eleitores: ');
$totalBrancos = readline('Total de Votos Brancos: ');
$totalNulos = readline('Total de Votos Nulos: '); 
$totalValidos = $totalEleitores - $totalBrancos - $totalNulos;

$percentualBrancos =  $totalBrancos / $totalEleitores;
$percentualNulos =  $totalNulos / $totalEleitores;
$percentualValidos =  $totalValidos / $totalEleitores;


echo 'O Percentual de Votos brancos é: ' . $percentualBrancos * 100 . '%' . "\n";
echo 'O Percentual de Votos Nulos é: ' . $percentualNulos * 100 . '%' . "\n";
echo 'O Percentual de Votos Validos é: ' . $percentualValidos * 100 . '%' . "\n";
