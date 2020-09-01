<?php

$categorias = [
    1 => [
        'titulo' => 'Frescos',
        'produtos' => [
            1 => [
                'titulo' => 'Salmão Fresco',
                'valor' => 100
            ],
            2 => [
                'titulo' => 'Tilapia Fresca',
                'valor' => 50
            ],
            3 => [
                'titulo' => 'Polvo Fresco',
                'valor' => 90
            ],
            4 => [
                'titulo' => 'Sardinha Fresca',
                'valor' => 20
            ],
            5 => [
                'titulo' => 'Piapara Fresca',
                'valor' => 40
            ],
            6 => [
                'titulo' => 'Pacu Fresco',
                'valor' => 60
            ],
            7 => [
                'titulo' => 'Camarão Fresco',
                'valor' => 70
            ],
            8 => [
                'titulo' => 'Lagosta Fresco',
                'valor' => 160
            ],
            9 => [
                'titulo' => 'Pintado Fresco',
                'valor' => 78
            ]
        ]
    ],

    2 => [
        'titulo' => 'Assados e Congelados',
        'produtos' => [
            1 => [
                'titulo' => 'Piapara Recheada Assada',
                'valor' => 80
            ],
            2 => [
                'titulo' => 'Tainha Recheada Assada',
                'valor' => 80
            ],
            3 => [
                'titulo' => 'Piapara Salada Piraju',
                'valor' => 160
            ],
            4 => [
                'titulo' => 'Salmao Salada Piraju',
                'valor' => 100
            ],
            5 => [
                'titulo' => 'Salmao Congelado',
                'valor' => 50
            ],
            6 => [
                'titulo' => 'Piapara Congelada',
                'valor' => 30
            ],
            7 => [
                'titulo' => 'Pintado Congelado',
                'valor' => 90
            ],
            8 => [
                'titulo' => 'Bacalhau Congelado',
                'valor' => 70
            ],
            9 => [
                'titulo' => 'Lambari Congelado',
                'valor' => 40
            ]
        ]
    ]
];

$saldo = 1800;
$categoriaSelecionada = null;

while ($categoriaSelecionada !== 0) {
    echo "Seu saldo é de: $ " . $saldo . "\n";
    
    foreach ($categorias as $key => $categoria) {
        echo $key . ' - ' . $categoria['titulo'] . "\n"; 
    }

    echo "0 - Sair.\n";

    $categoriaSelecionada = (int) readline('Digite um numero relacionado ao menu: ');

    if(!array_key_exists($categoriaSelecionada, $categorias)) {
        if ($categoriaSelecionada !== 0) {
            echo "Digite um numero valido.\n";
        }
        
        continue;
    }

    $categoria = $categorias[$categoriaSelecionada];
    $produtoSelecionado = null;

    while (!array_key_exists($produtoSelecionado, $categoria['produtos']) && $produtoSelecionado !== 0) {
        foreach ($categoria['produtos'] as $key => $produto) {
            echo $key . ' - ' . $produto['titulo'] . ' $ ' . $produto['valor'] . "\n";
        }

        echo "0 - Voltar\n";
        $produtoSelecionado = (int) readline('Digite o numero equivalente ao produto desejado: ');

        if (!array_key_exists($produtoSelecionado, $categoria['produtos'])) {
            if ($produtoSelecionado !== 0) {
                echo "Opção Invalida\n";
            }

            continue;
        }
        
        $quantidade = null;
        $produto = $categoria['produtos'][$produtoSelecionado];
        
        while (!is_int($quantidade) || $quantidade < 0) {
            $quantidade = (int) readline('Escolha a quantidade deste produto: ');
            
            if ($quantidade < 0) {
                echo "Quantidade Invalida\n";
                
                continue;
            }
            
            $subTotal = $produto['valor'] * $quantidade;
            
            if ($saldo < $subTotal) {
                echo "Saldo insuficiente\n";

                continue;
            }

            $saldo = $saldo - $subTotal;
        }
    }
}


