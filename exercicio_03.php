Faça um algoritmo para ler: quantidade atual em estoque, quantidade máxima em estoque e
quantidade mínima em estoque de um produto. Calcular e escrever a quantidade média ((quantidade
média = quantidade máxima + quantidade mínima)/2). Se a quantidade em estoque for maior ou igual
a quantidade média escrever a mensagem 'Não efetuar compra', senão escrever a mensagem 'Efetuar
compra'.


<?php

$estoque = readline('Quantidade atual em Estoque: ');
$maxEstoque = readline('Qual o estoque maximo: ');
$minEstoque = readline('Qual o minimo do estoque: ');
$mediaEstoque = ($maxEstoque + $minEstoque) / 2;

echo 'A media do estoque é: ' . $mediaEstoque . "\n";

if ($estoque >= $mediaEstoque) {
    echo "Nao efetuar Compra";
} else {
    echo "Efetuar a compra";
}

