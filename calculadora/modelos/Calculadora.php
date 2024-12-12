<?php

abstract class Calculadora
{
    private int $numA;
    private int $numB;
    
    public function __construct($a, $b)
    {
        $this->numA = $a;
        $this->numB = $b;
    }
    
    abstract public function calcular();

    public function getNumA(): int
    {
        return $this->numA;
    }

    public function setNumA(int $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    public function getNumB(): int
    {
        return $this->numB;
    }

    public function setNumB(int $numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}