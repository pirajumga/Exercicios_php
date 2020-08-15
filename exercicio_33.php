Escreva uma função, chamada media_ifrn, que recebe dois 
parâmetros reais e calcule a 
média ponderada, considerando o cálculo da 
média dos cursos superiores do IFRN.
<?php

$nota1 = readline('Digite a primeira nota: ');
$nota2 = readline('Digite a segunda nota: ');

function media_ifrn($nota1, $nota2) {
    return (($nota1 * 2) + ($nota2 * 3)) / 5;
}

echo media_ifrn($nota1, $nota2);
