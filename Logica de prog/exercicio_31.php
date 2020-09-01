<?php

$numero = readline ('Digite o valor que deseja realizar o fatorial: ');

function fat($numero) {
    $resultado = $numero;

    for($index = ($numero -1); $index >= 1; $index -= 1) {
        $resultado = $resultado * $index;
    }

    return $resultado;
}

echo fat($numero);