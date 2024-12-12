<?php

abstract class Veiculos
{
    private int $valorAluguel;
    private int $qtdKM;
    
    abstract public function getTipo();
    abstract public function getValorViagem();
    
    public function __toString()
    {
        return "O veículo ". $this->getTipo() .", foi alugado por R$". $this->getValorAluguel() .", rodou ". $this->getQtdKM() ." quilômetros com custo total de R$". $this->getValorViagem() . "\n";
    }

    public function __construct($v,$q)
    {
        $this->valorAluguel = $v;
        $this->qtdKM = $q;
    }
    
    public function getValorAluguel(): int
    {
        return $this->valorAluguel;
    }

    public function setValorAluguel(int $valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }

    public function getQtdKM(): int
    {
        return $this->qtdKM;
    }

    public function setQtdKM(int $qtdKM): self
    {
        $this->qtdKM = $qtdKM;

        return $this;
    }
}