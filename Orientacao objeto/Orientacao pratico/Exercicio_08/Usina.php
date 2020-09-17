<?php

class Usina
{
    private $massaMaterial = 0;
    private $tempo = 0;

    public function __construct($valorMassaMaterial)
    {
        $this->massaMaterial = $valorMassaMaterial;
    }

    public function getTempoNecessario()
    {
        while ($this->massaMaterial > 0.10) {
            $this->massaMaterial *= 0.75;
            $this->tempo += 1;
        }

        return $this->tempo;
    }
}

$usina = new USina(1);
echo 'O tempo necessario para a massa ser menor que 0.10 é: ' . $usina->getTempoNecessario();