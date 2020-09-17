<?php

class Votos
{
    private $totalEleitores = 0;
    private $votosBrancos = 0;
    private $votosNulos = 0;

    public function __construct($valorEleitores, $valorVotosBrancos, $valorVotosNulos)
    {
        $this->eleitores = $valorEleitores;
        $this->brancos = $valorVotosBrancos;
        $this->nulos = $valorVotosNulos;
    }

    public function getPercentualBrancos()
    {
        return $this->brancos * 100 / $this->eleitores;
    }

    public function getPercentualNulos()
    {
        return $this->nulos * 100 / $this->eleitores;
    }

    public function getQuantidadeVotosValidos()
    {
        return $this->eleitores - ($this->brancos + $this->nulos);
    }

    public function getPercentualValidos()
    {
        return $this->getQuantidadeVotosValidos() * 100 / $this->eleitores;
    }

    public function getQuantidadeEleitores()
    {
        return $this->eleitores;
    }

    public function getQuantidadeBrancos()
    {
        return $this->brancos;
    }

    public function getQuantidadeNulos()
    {
        return $this->nulos;
    }
}

$votos = new Votos(1000, 100, 100);
echo 'A quantidade de eleitores é: ' . $votos->getQuantidadeEleitores() . PHP_EOL;
echo 'A quantidade de votos em Branco é: ' . $votos->getQuantidadeBrancos() . PHP_EOL;
echo 'A quantidade de votos nulos é: ' . $votos->getQuantidadeNulos() . PHP_EOL;
echo 'A Quantidade votos validos é: ' . $votos->getQuantidadeVotosValidos() . PHP_EOL;
echo 'O Percentual de votos Brancos é: ' . $votos->getPercentualBrancos() . '%' . PHP_EOL;
echo 'O Percentutal de votos Nulos é: ' . $votos->getPercentualNulos() . '%' . PHP_EOL;
echo 'O Percentual de votos validos é: ' . $votos->getPercentualValidos() . '%' . PHP_EOL;
