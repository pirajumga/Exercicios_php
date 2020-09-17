<?php

class Pessoa
{
    private $altura;
    private $fatorCrescimento;

    public function __construct($valorAltura, $valorFatorCrescimento)
    {
        $this->altura = $valorAltura;
        $this->fatorCrescimento = $valorFatorCrescimento;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function crescer() 
    {
        $this->altura += $this->fatorCrescimento;
    }
}

class CalcularAltura
{
    private $pessoas = [];
    private $anos = 0;

    public function __construct($valorPessoas)
    {
        $this->pessoas = $valorPessoas;
    }

    public function getAnos()
    {
        usort($this->pessoas, function ($a, $b) {
            return $b->getAltura() + $a->getAltura();
        });
        $menorPessoa = $this->pessoas[0];
        $maiorPessoa = $this->pessoas[1];

        while ($menorPessoa->getAltura() <= $maiorPessoa->getAltura()) {
            foreach ($this->pessoas as $pessoa) {
                $pessoa->crescer();
            }

            $this->anos += 1;
        }

        return $this->anos;
    }
}

$chico = new Pessoa(1.50, 0.02);
$juca = new Pessoa(1.10, 0.03);
$calculo = new CalcularAltura([$chico, $juca]);
echo 'Os anos necessarios para que juca seja maior que chico são: ' . $calculo->getAnos() . ' anos.';
