<?php

require_once('Midia.php');

class DVD extends Midia
{
    public function getTipo()
    {
        return "DVD";
    } 
}