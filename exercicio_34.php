Escreva uma função, chamada transposta_matriz, que recebe 
uma matriz como parâmetro e retorna sua transposta.

<?php

function transposta_matriz($matriz) {
    $transposta = [];

    foreach ($matriz as $linha => $valoresLinha) {
        foreach ($valoresLinha as $coluna => $valorColuna) {
            if (!array_key_exists($coluna, $transposta)) {
                $transposta[$coluna] = [];
            }

            $transposta[$coluna][$linha] = $valorColuna;
        }
    }

    return $transposta;
}

$minhaMatriz = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

var_dump(transposta_matriz($minhaMatriz));

