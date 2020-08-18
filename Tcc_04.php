<?php

$categorias = [
    1 => [
        'titulo' => 'Fresco',
        'produtos' => [
            1 => [
                'titulo' => 'Salmão Fresco ',
                'valor' => 100,
                'estoque' => 1
            ],
            2 => [
                'titulo' => 'Tilapia Fresca ',
                'valor' => 50,
                'estoque' => 1
            ],
            3 => [
                'titulo' => 'Polvo Fresco ',
                'valor' => 90,
                'estoque' => 1
            ],
            4 => [
                'titulo' => 'Sardinha Fresca ',
                'valor' => 20,
                'estoque' => 1
            ],
            5 => [
                'titulo' => 'Piapara Fresca ',
                'valor' => 40,
                'estoque' => 1
            ],
            6 => [
                'titulo' => 'Pacu Fresco ',
                'valor' => 60,
                'estoque' => 1
            ],
            7 => [
                'titulo' =>
                'Camarão Fresco ',
                'valor' => 70,
                'estoque' => 1
            ],
            8 => [
                'titulo' => 'Lagosta Fresco ',
                'valor' => 160,
                'estoque' => 1
            ],
            9 => [
                'titulo' => 'Pintado Fresco ',
                'valor' => 78,
                'estoque' => 1
            ]
        ]
    ],

    2 => [
        'titulo' => 'Assados e Congelados',
        'produtos' => [
            1 => [
                'titulo' => 'Piapara Recheada Assada',
                'valor' => 80,
                'estoque' => 1
            ],
            2 => [
                'titulo' => 'Tainha Recheada Assada',
                'valor' => 80,
                'estoque' => 1
            ],
            3 => [
                'titulo' => 'Piapara Salada Piraju',
                'valor' => 160,
                'estoque' => 1
            ],
            4 => [
                'titulo' => 'Salmao Salada Piraju',
                'valor' => 100,
                'estoque' => 1
            ],
            5 => [
                'titulo' => 'Salmao Congelado',
                'valor' => 50,
                'estoque' => 1
            ],
            6 => [
                'titulo' => 'Piapara Congelada',
                'valor' => 30,
                'estoque' => 1
            ],
            7 => [
                'titulo' => 'Pintado Congelado',
                'valor' => 90,
                'estoque' => 1
            ],
            8 => [
                'titulo' => 'Bacalhau Congelado',
                'valor' => 70,
                'estoque' => 1
            ],
            9 => [
                'titulo' => 'Lambari Congelado',
                'valor' => 40,
                'estoque' => 1
            ]
        ]
    ]
];

$saldo = 1800;
$categoriaSelecionada = null;

while ($categoriaSelecionada !== 0) {
    $categorias = array_map(function ($item) {
        $item['produtos'] = array_filter($item['produtos'], function($produto){
            return $produto['estoque'] > 0;
        });

        return $item;
    } ,$categorias);
    $categorias = array_filter($categorias, function($item) {
        return count($item['produtos']) > 0;
    });
    echo "Seu saldo é de: $ " . $saldo . "\n";
    
    foreach ($categorias as $key => $categoria) {
        echo $key . ' - ' . $categoria['titulo'] . "\n";
    }

    echo "0 - Sair\n";
    $categoriaSelecionada = (int) readline('Escolha uma categoria: ');

    if(!array_key_exists($categoriaSelecionada, $categorias)) {
        if ($categoriaSelecionada !== 0) {
            echo "Digite um numero valido.\n";
        }

        continue;
    }

    $produtoSelecionado = null;
    $categoria = $categorias[$categoriaSelecionada];

    while ($produtoSelecionado !== 0 && !array_key_exists($produtoSelecionado, $categoria['produtos'])) {

        foreach ($categoria['produtos'] as $key => $produto) {
            echo $key . ' - ' . $produto['titulo'] . ' - R$' . $produto['valor'] . ' - Estoque: ' . $produto['estoque'] . "\n";
        }

        echo "0 - Voltar\n";
        $produtoSelecionado = (int) readline('Escolha um Produto: ');

        if (!array_key_exists($produtoSelecionado, $categoria['produtos'])) {
            if($produtoSelecionado !== 0) {
                echo "Opção Invalida\n";
            }

            continue;
        }

        $quantidade = null;
        $produto = $categoria['produtos'][$produtoSelecionado];

        while (!is_int($quantidade) || $quantidade <0 || $quantidade > $produto['estoque']) {
            $quantidade = (int) readline('Escolha a quantidade deste produto: ');

            if ($quantidade < 0) {
                echo "Quantidade Invalida\n";

                continue;
            }

            if ($quantidade > $produto['estoque']) {
                echo "Quantidade de estoque insuficiente\n";

                continue;
            }

            $subTotal = $produto['valor'] * $quantidade;
            if ($quantidade == $categorias[$categoriaSelecionada]['produtos'][$produtoSelecionado]['estoque']) {
                $subTotal = $subTotal * 0.88;
            }

            if ($saldo < $subTotal) {
                echo "Saldo Insuficiente\n";

                continue;
            }

            $saldo = $saldo - $subTotal;
        }

        $categorias[$categoriaSelecionada]['produtos'][$produtoSelecionado]['estoque'] -= $quantidade;
    }
}