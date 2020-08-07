Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever
uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o
aluno é aprovado). Escrever também a média calculada
<?php

$nota1 = readline('Nota 1: ');
$nota2 = readline('Nota 2: ');
$mediaNota = ($nota1 + $nota2) / 2;

echo 'A Media do aluno é : ' . $mediaNota . "\n";

if ($mediaNota >= 6) {
    echo 'Aprovado';
} else {
    echo 'Reprovado';
}



