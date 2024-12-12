<?php

require_once('Veiculos.php');

class Carro extends Veiculos
{
    public function getTipo()
    {
        return "Carro";
    }
    
    public function getValorViagem()
    {
        return $this->getValorAluguel() + ($this->getQtdKM() * 1.50);
    }
}