A biblioteca de uma universidade deseja fazer
um algoritmo que leia o nome do livro que
será emprestado, o tipo de usuário (professor
ou aluno) e possa imprimir um recibo
conforme mostrado a seguir. Considerar que
o professor tem 10 dias para devolver o livro
o aluno somente 3 dias
<?php

$nomeLivro = readline('Digite o nome do livro: ');
$usario = readline('Você é professor ou aluno ?');

if (strtolower($usario) == 'aluno') {
    echo "O livro, " . $nomeLivro . ", devera ser entregue em 3 dias.";
} else if (strtolower($usario) == 'professor') {
    echo 'O livro, ' . $nomeLivro . ', devera ser entregue em 10 dias.';
} else {
    echo 'Este usário é inválido';
}