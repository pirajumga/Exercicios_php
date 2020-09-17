<?php

class Biblioteca
{
    const PROFESSOR = 1;
    const ALUNO = 2;
    private $nomeLivro = '';
    private $tipoUsuario = '';
    
    public function __construct($valorNomeLivro, $valorTipoUsuario)
    {
        $this->nomeLivro = $valorNomeLivro;
        $this->tipoUsuario = $valorTipoUsuario;
    }

    public function getNomeLivro()
    {
        return $this->nomeLivro;
    }

    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }

    public function getPrazo()
    {
        return $this->tipoUsuario === Biblioteca::PROFESSOR ? 10 : 3;
    }
}

$biblioteca = new Biblioteca('Alice no pais das maravilhas', Biblioteca::ALUNO);
echo 'O livro ' . $biblioteca->getNomeLivro() . ' devera ser devolvido em ' . $biblioteca->getPrazo() . ' dias.';