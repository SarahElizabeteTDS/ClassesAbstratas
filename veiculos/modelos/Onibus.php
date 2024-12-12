<?php

require_once('Veiculos.php');

class Onibus extends Veiculos
{
    public function getTipo()
    {
        return "Ônibus";
    }
    
    public function getValorViagem()
    {
        return $this->getValorAluguel() + ($this->getQtdKM() * 4.20);
    }
}