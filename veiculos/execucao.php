<?php

require_once('modelos/Carro.php');
require_once('modelos/MicroBus.php');
require_once('modelos/Onibus.php');
require_once('modelos/Van.php');
require_once('modelos/Veiculos.php');

$valorAluguel = readline("Qual o valor do aluguel? ");
$qtdKM = readline("Quantos KM você andou? ");
print "Qual foi o veículo?\n1-Carro\n2-Van\n3-Micro-ônibus\n4-ônibus\n";
$tipo = readline();

if ($tipo == 1) 
{
    $carro = new Carro($valorAluguel, $qtdKM);
    print $carro;
}
elseif ($tipo == 2) 
{
    $van = new Van($valorAluguel, $qtdKM);
    print $van;
}
elseif ($tipo == 3) 
{
    $microbus = new MicroBus($valorAluguel, $qtdKM);
    print $microbus;
}
else
{
    $onibus = new Onibus($valorAluguel, $qtdKM);
    print $onibus;
}