Ler vários números e informar quantos
números entre 100 e 200 foram digitados. Se
o valor 0 for lido encerrar a execução
<?php

$numero = null;
$quantidadeNumeros = 0;

while ($numero !== 0) {
    $numero = (int) readline("Digite um Numero: ");
    if ($numero >= 100 && $numero <= 200) {
        $quantidadeNumeros += 1;
    }
}

echo 'A quantidade de numeros entre 100 e 200 é: ' . $quantidadeNumeros;