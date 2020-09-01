Faça um programa que leia um nome de usuário e a sua senha e 
não aceite a senha igual ao nome do usuário, 
mostrando uma mensagem de erro e voltando a pedir as informações

<?php

$usuario = null;
$senha = null;

while ($usuario === $senha) {
    $usuario = readline('Usuario: ');
    $senha = readline('Senha: ');
    
    if ($usuario === $senha) {
        echo 'Erro, digite o usario e senha diferentes' . "\n";
    }
}
