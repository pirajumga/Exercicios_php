<?php

class Empregado
{
    private $primeiroNome = '';
    private $sobrenome = '';
    private $salarioMensal = 0;

    public function __construct($valorPrimeiroNome, $valorSobrenome, $valorSalarioMensal)
    {
        $this->primeiroNome = $valorPrimeiroNome;
        $this->sobrenome = $valorSobrenome;
        $this->salarioMensal = $valorSalarioMensal;

        if ($this->salarioMensal < 0) {
            $this->salarioMensal = 0;
        }
    }

    public function getPrimeiroNome()
    {
        return $this->primeiroNome;
    }

    public function setPrimeiroNome($valorPrimeiroNome)
    {
        $this->primeiroNome = $valorPrimeiroNome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($valorSobrenome)
    {
        $this->sobrenome = $valorSobrenome;
    }

    public function getSalarioMensal()
    {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($valorSalarioMensal)
    {
        $this->salarioMensal = $valorSalarioMensal;
    }

    public function getSalarioAnual()
    {
        return $this->salarioMensal * 12;
    }
}

$empregado = new Empregado('Gabriel', 'Costa', 100);
echo $empregado->getSalarioAnual() . "\n" . $empregado->getSalarioAnual() * 1.10;