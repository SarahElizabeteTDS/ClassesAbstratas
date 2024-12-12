<?php

require_once('Calculadora.php');

class Subtracao extends Calculadora
{
    public function calcular()
    {
        return $this->getNumA() - $this->getNumB();
    }
}