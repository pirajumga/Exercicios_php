<?php

$produtos = [
    1 => [
        'titulo' => 'Salmão',
        'valor' => 88
    ],
    2 => [
        'titulo' => 'Tilapia',
        'valor' => 38
    ],
    3 => [
        'titulo' => 'Polvo',
        'valor' => 90
    ],
    4 => [
        'titulo' => 'Lagosta',
        'valor' => 160
    ],
    5 => [
        'titulo' => 'Camarão',
        'valor' => 300
    ],
    6 => [
        'titulo' => 'Piapara',
        'valor' => 30
    ],
    7 => [
        'titulo' => 'Pacu',
        'valor' => 50
    ],
    8 => [
        'titulo' => 'Lambari',
        'valor' => 100
    ],
    9 => [
        'titulo' => 'Bacalhau Desalgado',
        'valor' => 200
    ],
];

$saldo = 1800;
$chave = null;

while ($chave !== 0) {
    echo 'Seu saldo é: ' . $saldo;

    foreach ($produtos as $key => $produto) {
        echo $key . " - " . $produto['titulo']  . " - "   . 'R$' . $produto['valor'] . "\n";
    };
    
    echo "0 - Sair." . "\n";
    $chave = (int) readline('Digite um numero do menu.');

    if (!array_key_exists ($chave, $produtos)) {
        if ($chave !== 0) {
            echo "Digite um valor equivalente ao menu." . "\n";
        }
    
        continue;
    }

    if ($saldo < $produtos[$chave]['valor']) {
        echo "Seu saldo é insuficiente." . "\n";

        continue;
    }
    
    $saldo = $saldo - $produtos[$chave]['valor'];
}
