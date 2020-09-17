<?php

class Invoice 
{
    private $numeroDoItem = '';
    private $descricaoItem = '';
    private $quantidadeComprada = 0;
    private $precoUnitario = 0;

    public function __construct($valorNumeroDoItem, $valorDescricaoItem, $valorQuantidadeComprada, $valorPrecoUnitario)
    {
        $this->numeroDoItem = $valorNumeroDoItem;
        $this->descricaoItem = $valorDescricaoItem;
        $this->quantidadeComprada = $valorQuantidadeComprada;
        $this->precoUnitario = $valorPrecoUnitario;

        if ($this->quantidadeComprada < 0) {
            $this->quantidadeComprada = 0;
        }

        if ($this->precoUnitario < 0) {
            $this->precoUnitario = 0;
        }
    }

    public function getNumeroDoItem() 
    {
        return $this->numeroDoItem;
    }

    public function setNumeroDoItem($valorNumeroDoItem)
    {
        $this->numeroDoItem = $valorNumeroDoItem;
    }

    public function getDescricaoItem()
    {
        return $this->descricaoItem;
    }

    public function setDescricaoItem($valorDescricaoItem)
    {
        $this->descricaoItem = $valorDescricaoItem;
    }

    public function getQuantidadeComprada()
    {
        return $this->quantidadeComprada;
    }

    public function setQuantidadeComprada($valorQuantidadeComprada)
    {
        $this->quantidadeComprada = $valorQuantidadeComprada;
    }

    public function getPrecoUnitario()
    {
        return $this->precoUnitario;
    }

    public function setPrecoUnitario($valorPrecoUnitario)
    {
        $this->precoUnitario = $valorPrecoUnitario;
    }

    public function getInvoiceAmount()
    {
        return $this->quantidadeComprada * $this->precoUnitario;
    }
}

$invoice = new Invoice('1234', 'bala', 10, 2);
echo $invoice->getInvoiceAmount() . "\n";
$invoice->setNumeroDoItem('456');
echo $invoice->getNumeroDoItem() . "\n";
$invoice->setDescricaoItem('Bolinha');
echo $invoice->getDescricaoItem() . "\n";
$invoice->setQuantidadeComprada(40);
echo $invoice->getQuantidadeComprada() . "\n";
$invoice->setPrecoUnitario(4);
echo $invoice->getPrecoUnitario() . "\n" . $invoice->getInvoiceAmount();