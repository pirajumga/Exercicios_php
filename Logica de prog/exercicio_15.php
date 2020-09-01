Criar um algoritmos que entre com uma
palavra e imprima conforme o exemplo
◦ Palavra: sonho
◦ SONHO
◦ SONHO SONHO
◦ SONHO SONHO SONHO
◦ SONHO SONHO SONHO SONHO

<?php

$palavra = readline('Digite uma palavra: ');
$resultado = [];

for ($index = 0; $index < 4; $index += 1) {
    $resultado[] = $palavra;
    echo implode(" ", $resultado) . "\n";
}

