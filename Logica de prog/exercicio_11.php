Criar um algoritmos que leia um número e
imprima todos os número de 1 até ele e o seu
produto

<?php
$numero = readline('Digite um Numero: '); 
$produto = 1;

for ($index = 1; $index <= $numero; $index += 1) {
    echo $index . "\n";
    $produto = ($produto * $index);
}


echo $produto;
