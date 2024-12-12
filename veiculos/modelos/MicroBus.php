<?php

require_once('Veiculos.php');

class MicroBus extends Veiculos
{
    public function getTipo()
    {
        return "Micro Ônibus";
    }
    
    public function getValorViagem()
    {
        return $this->getValorAluguel() + ($this->getQtdKM() * 2.75);
    }
}