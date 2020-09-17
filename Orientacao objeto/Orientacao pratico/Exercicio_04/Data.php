<?php

class Data
{
    private $dia = 0;
    private $mes = 0;
    private $ano = 0;

    public function __construct($valorDia, $valorMes, $valorAno)
    {
        $this->dia = $valorDia;
        $this->mes = $valorMes;
        $this->ano = $valorAno;

        if (!is_int($this->dia) || $this->dia > 31 || $this->dia < 0) {
            throw new Exception('Dia Invalido.');
        }

        if (!is_int($this->mes) || $this->mes > 12 || $this->mes < 0) {
            throw new Exception('Mes Invalido.');
        }

        if (!is_int($this->ano) || $this->ano < 1) {
            throw new Exception('Ano Invalido');
        }
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function setDia($valorDia)
    {
        $this->dia = $valorDia;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function setMes($valorMes)
    {
        $this->mes = $valorMes;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($valorAno)
    {
        $this->ano = $valorAno;
    }

    public function toString()
    {
        return sprintf('%s/%s/%s', $this->dia, $this->mes, $this->ano);
    }

    public function proximaData()
    {
        if ($this->dia == 31 && $this->mes == 12) {
            return sprintf('%s/%s/%s', $this->dia = 1, $this->mes = 1, $this->ano + 1);
        }

        if ($this->dia == 31) {
            return sprintf('%s/%s/%s', $this->dia = 1, $this->mes + 1, $this->ano);
        }

        return sprintf('%s/%s/%s', $this->dia + 1, $this->mes, $this->ano);
    }
}

$data = new Data(28, 8, 2020);
echo $data->toString() . "\n";
echo $data->proximaData();