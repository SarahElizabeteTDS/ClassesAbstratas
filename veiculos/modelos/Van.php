<?php

require_once('Veiculos.php');

class Van extends Veiculos
{
    public function getTipo()
    {
        return "Van";
    }
    
    public function getValorViagem()
    {
        return $this->getValorAluguel() + ($this->getQtdKM() * 2.10);
    }
}