Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA

<?php

$nome = readline('Nome: ');
$sexo = readline('Sexo: ');
$idade = readline('Idade: ');

if (strtolower($sexo) == 'feminino' && $idade < 25) {
    echo $nome . ', Você foi aceita';
} else {
    echo $nome . ', Você não foi aceita';
}