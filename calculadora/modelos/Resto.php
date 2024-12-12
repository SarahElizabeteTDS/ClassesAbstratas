<?php

require_once('Calculadora.php');

class Resto extends Calculadora
{
    public function calcular()
    {
        return $this->getNumA() % $this->getNumB();
    }
}