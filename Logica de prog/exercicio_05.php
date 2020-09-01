Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes

<?php

$numero = readline('Digite um Numero: ');

if ($numero % 10 == 0 || $numero % 5 == 0 || $numero % 2 == 0) {
    echo 'Este numero é divisivel por 10, 5 ou 2.';
} else {
    echo "Este numero não é divisivel por 10, 5 ou 2";
}