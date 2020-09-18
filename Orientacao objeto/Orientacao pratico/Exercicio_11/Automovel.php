<?php

class Automovel
{
    const GASOLINA = 1;
    const ALCOOL = 2;
    const DIESEL = 3;
    private $modelo;
    private $cor;
    private $combustivel;

    public function __construct($valorModelo, $valorCor, $valorCombustivel)
    {
        $this->modelo = $valorModelo;
        $this->cor = $valorCor;
        $this->combustivel = $valorCombustivel;
    }

    public function quantoCusta()
    {
        if ($this->combustivel === Automovel::GASOLINA) {
            return 10000;
        }

        if ($this->combustivel === Automovel::ALCOOL) {
            return 8000;
        }

        if ($this->combustivel === Automovel::DIESEL) {
            return 9500;
        }
    }
}

class AutomovelBasico extends Automovel
{
    private $retrovisorDoLadoDireito;
    private $limpadorDoVidroTraseiro;
    private $radioAMFM;

    public function __construct($valorModelo, $valorCor, $valorCombustivel, $valorRetrovisorDoLadoDireito, $valorLimpadorDoVidroTraseiro, $valorRadioAMFM)
    {
        parent::__construct($valorModelo, $valorCor, $valorCombustivel);
        $this->retrovisorDoLadoDireito = $valorRetrovisorDoLadoDireito;
        $this->limpadorDoVidroTraseiro = $valorLimpadorDoVidroTraseiro;
        $this->radioAMFM = $valorRadioAMFM;
    }

    public function quantoCusta()
    {
        $valorBase = parent::quantoCusta();
        
        if ($this->retrovisorDoLadoDireito) {
            $valorBase += 1000;
        }

        if ($this->limpadorDoVidroTraseiro) {
            $valorBase += 2000;
        }

        if ($this->radioAMFM) {
            $valorBase += 4000;
        }

        return $valorBase;
    }
}

class AutomovelDeLuxo extends AutomovelBasico
{
    private $direcaoHidraulica;
    private $cambioAutomatico;
    private $vidrosETravasEletricos;

    public function __construct($valorModelo, $valorCor, $valorCombustivel, $valorRetrovisorDoLadoDireito, $valorLimpadorDoVidroTraseiro, $valorRadioAMFM, $valorDirecaoHidraulica, $valorCambioAutomatico, $valorVidrosETravasEletricos)
    {
        parent::__construct($valorModelo, $valorCor, $valorCombustivel, $valorRetrovisorDoLadoDireito, $valorLimpadorDoVidroTraseiro, $valorRadioAMFM);
        $this->direcaoHidraulica = $valorDirecaoHidraulica;
        $this->cambioAutomatico = $valorCambioAutomatico;
        $this->vidrosETravasEletricos = $valorVidrosETravasEletricos;
    }

        public function quantoCusta()
        {
            $valorBase = parent::quantoCusta();

            if ($this->direcaoHidraulica) {
                $valorBase += 5000;
            }

            if ($this->cambioAutomatico) {
                $valorBase += 6000;
            }

            if ($this->vidrosETravasEletricos) {
                $valorBase += 7000;
            }
            
            return $valorBase;
        }
}


$automovel = new AutomovelDeLuxo('4 rodas', 'preto', Automovel::ALCOOL, true, true, true, true, true, true);
echo 'O preço do automovel é: $' . $automovel->quantoCusta();

